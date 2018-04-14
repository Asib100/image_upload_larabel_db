<?php

namespace App\Http\Controllers;
use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function ShowUploadForm()
    {
        return view('Fileupload');
    }
    public function storeFile(request $request)
    {
        if($request->hasFile('file')){
            $filename= $request->file->getClientOriginalName();
            $filesize=$request->file->getClientSize();
            $request->file->storeAs('public/upload',$filename);
            //return 'yes';

            $file=new File;
            $file->name=$filename;
            $file->size=$filesize;
            $file->save();


        }
        return $request->all();
    }
    
}
