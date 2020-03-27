<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Client;
use App\Role;

class ClientController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index(Request $request)
  {
    $admin = [];
    if(($request->user()->hasAnyRole('superadmin')) OR ($request->user()->hasAnyRole('admin'))){
      $admin['admin'] = 'admin';
    }
    $clients = Client::paginate(20);
    return view('client.index')->with(['clients'=> $clients ,'admin'=>$admin]);
    //  return view('client.index');
  }
  public function store(Request $request)
  {
      $validator = Validator::make($request->all(), [
          'clientname' => 'required',
          'contactno' => 'required',
          'cperson' => 'required',
      ]);

      if ($validator->fails()) {
          return redirect('/clients')
                      ->withErrors($validator)
                      ->withInput();
      }
      if($request->input('eventid') == 1){
        $client = new Client;
        $client->clientname = $request->input('clientname');
        $client->branch = $request->input('branch');
        $client->busadd = $request->input('busadd');
        $client->tin = $request->input('tin');
        $client->email = $request->input('email');
        $client->contactno = $request->input('contactno');
        $client->cperson = $request->input('cperson');
        $client->clientname = $request->input('clientname');
        $client->encodedby = Auth::user()->id;
        //save
        $cid = $client->save();
        return redirect('/clients')->with('success', $request->input("clientname").' has added.');
      }else{//edit update hebrev
        $client = Client::find($request->input('cid'));
        $client->clientname = $request->input('clientname');
        $client->branch = $request->input('branch');
        $client->busadd = $request->input('busadd');
        $client->tin = $request->input('tin');
        $client->email = $request->input('email');
        $client->contactno = $request->input('contactno');
        $client->cperson = $request->input('cperson');
        $client->clientname = $request->input('clientname');
        $client->save();
        return redirect('/clients')->with('success', $request->input("clientname").' has been updated.');
      }
  }
  public function search(Request $request)
  {
    $admin = [];
    if(($request->user()->hasAnyRole('superadmin')) OR ($request->user()->hasAnyRole('admin'))){
      $admin['admin'] = 'admin';
    }
    $clients = Client::where('clientname', 'like', "%$request->csearchkey%")->paginate(20);
    // dd($clients);
    return view('client.index')->with(['clients'=> $clients ,'admin'=>$admin]);
  }
  public function getClientList(Request $request)
  {
    $admin = [];
    if(($request->user()->hasAnyRole('superadmin')) OR ($request->user()->hasAnyRole('admin'))){
      $admin['admin'] = 'admin';
    }
    $clients = DB::select("SELECT clients.* FROM vwclientdetails as clients WHERE clients.id=clients.parentID"); //Client::where(['id' => 'parentID3'])->get();
    // $requestJSON = $clients[0];
    // $requestJSON->lester = 205454;
     //dd($clients);
    return view('client.list')->with(['clients'=> $clients ,'admin'=>$admin]);
    //  return view('client.index');
  }
  public function getClientDetail(Request $request)
  {
    $data = DB::table('vwclientdetails')->where('id',$request->id)->get();
    $branch =  DB::select("SELECT clients.* FROM vwclientdetails as clients WHERE $request->id = clients.parentID and clients.id != clients.parentID");
    $responseJson = [];
    $responseJson = ["clientID" => $request->id, "data" => $data, "branch" => $branch ];
    return response()->json($responseJson);
  }
  public function getClient(Request $request)
  {
    $cid = $request->cid;

    $clients = DB::table('vwclientdetails')->where(['id'=> $cid])->get();

    $files = DB::select("SELECT cf.id, cf.applicableDate, (SELECT f.code FROM forms as f WHERE f.id=cf.formID) as formCode,(SELECT f.description FROM forms as f WHERE f.id=cf.formID) as formDescription,(SELECT (SELECT a.code FROM agencies as a WHERE f.agencyID = a.id) as agencyCode FROM forms as f WHERE f.id=cf.formID) as agencies, cf.locationReference,cf.filetype FROM client_files as cf WHERE cf.clientID = $cid and cf.isDeleted=0 Order By cf.applicableDate DESC");

    return view('client.details')->with(['clients'=>$clients, 'files'=>$files]);
  }
  public function update(Request $request)
  {
    $data = DB::table('clients')
        ->updateOrInsert(
        ['id' => $request->cid],
        ['clientname' => $request->cname, 'branch'=>$request->branch, 'busadd'=>$request->busadd, 'tin'=>$request->tin , 'email'=>$request->email, 'contactno'=>$request->contactno ,'cperson'=>$request->cperson , 'encodedby'=>Auth::user()->id]
    );
    if( $request->cid !== null ||  $request->cid === ''){
      $data = DB::table('clients_data')
        ->updateOrInsert(
        ['clientid' => $request->cid],
        ['businessID' => $request->businessID, 'RDO'=>$request->rdo, 'tax_class'=>$request->tax_class, 'tax_type'=>$request->tax_type , 'date_registered'=>$request->date_r]
      );
    }
    return response()->json($data);
  }
  public function getFormList(Request $request)
  {
    $data = DB::table('forms')->get();
    return response()->json($data);
  }

  function upload(Request $request)
  {
    
    $rules = array(
      'file'  => 'required|max:1000000',
      'applicableDate' => 'required|date',
      'formTypeID' => 'required',
      'cid' => 'required'
     );

     $error = Validator::make($request->all(), $rules);

     if($error->fails())
     {
      return response()->json(['errors' => $error->errors()->all()]);
     }

     $image = $request->file('file');
     $file_ext = "";
     $new_name = Str::random(40) . '.' . strtolower($image->getClientOriginalExtension());
     $image->move(public_path('files'), $new_name);

     switch($image->getClientOriginalExtension()){
        case 'pdf':
          $file_ext = 'pdf.svg';
          break;
        case 'doc':
        case 'docx':
            $file_ext = 'doc.svg';
            break;
        case 'jpeg':
        case 'jpg':
        case 'gif':
        case 'png':
            $file_ext = 'image.svg';
            break;
        default:
            $file_ext = 'file.svg';
     }
     $ins_upd = 'created_at';
     $cur_datetime = date("Y-m-d").' '.date("H:i:s");
     if($request->fileID){
      $ins_upd = 'updated_at';
     }
     $dataID = DB::table('client_files')
            ->insertGetId(
            ['clientID' => $request->cid, 'applicableDate'=>$request->applicableDate, 'formID'=>$request->formTypeID, 'filetype'=>$file_ext, 'locationReference'=>$new_name, 'isDeleted'=>'0' , 'uploadedby'=>Auth::user()->id, $ins_upd=> $cur_datetime ]
        );
      $data = DB::table('client_files')->where(['id'=>$dataID])->get();
      $output = array(
          'success' => 'File uploaded successfully',
          'image'  => '<img src="/icons/'.$file_ext.'" class="img-thumbnail" />',
          'responseJSON' => $data
          );

      return response()->json($output);
      //return response()->json($request);
    }

}
