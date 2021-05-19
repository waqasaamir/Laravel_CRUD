<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewUser extends Controller
{
    //
    function getdata(Request $req){
        
        $req->validate([

        'username'=>'required | max:10' ,
        'password'=>'required | min:3'
        ]);

        echo $req;
        return $req->input;

        
    }
}
