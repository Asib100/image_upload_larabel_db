<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class uploadController extends Controller
{
    public function index()
    {
        return view('upload.upload');
    }
    public function store(request $request)
    {
        //return $request->image;
        if($request->hasFile('image')){
        $request->file('image');
        //return $request->image->store('public');
        //return Storage::putfile('public',$request->file('image'));
            return $request->image->storeAs('public','pic_new_name.jpg');
    }else{
            return 'No file is selected';
        }

    }
    public function show()
    {
        //return Storage::files('public');
        //$url=Storage::url('pic_new_name.jpg');
        //return "<img src='".$url."'/>";
        //$rawContent = 
        return Storage::get('pic_new_name.jpg');
        //if(Storage::put('newImage2.jpg',$rawContent)){
          //      return 'file2 is created';
        //}
    }
}
