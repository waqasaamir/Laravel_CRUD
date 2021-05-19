<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function upload(Request $req)
    {
        if ($req->file('xyz') == null) 
        {

            $file="No File Found.." ;

        }
        else
        {
           $file =$req->file('xyz')->store('apiDocs');  
        }
        return $file;

    }
}
