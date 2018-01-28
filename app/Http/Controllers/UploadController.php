<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UploadFile;

class UploadController extends Controller
{
    public function index(){
        return view('upload.uploadfile');
    }
    public function showUploadFile(Request $request){
        $file = $request->file('image');

//        //Display File Name
//        echo 'File Name: '.$file->getClientOriginalName();
//        echo '<br>';
//
//        //Display File Extension
//        echo 'File Extension: '.$file->getClientOriginalExtension();
//        echo '<br>';
//
//        //Display File Real Path
//        echo 'File Real Path: '.$file->getRealPath();
//        echo '<br>';
//
//        //Display File Size
//        echo 'File Size: '.$file->getSize();
//        echo '<br>';
//
//        //Display File Mime Type
//        echo 'File Mime Type: '.$file->getMimeType();


// Валидация

        if (
        $this->validate($request, ['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048' ,])
        )
        {

            //Move Uploaded File
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());

            echo '<h3>file uploaded ';
        }
    }
}
