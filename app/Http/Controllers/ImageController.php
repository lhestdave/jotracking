<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware(['auth', 'verified']);
    }

    public function multifileupload()
    {
        return view('dropzonejs');
    }
    public function store(Request $request)
    {
        $image = $request->file('file');
        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('files'),$avatarName);
         
        $imageUpload = new Image();
        $imageUpload->filename = $avatarName;
        $imageUpload->save();
        return response()->json(['success'=>$avatarName]);
    }
}
