<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
  public function getClients()
  {
    $clients = Client::all();
    return redirect('/clients')->with('clients',$clients);
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
}
