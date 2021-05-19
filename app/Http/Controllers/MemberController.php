<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    function show()
    {

            $data= User::all();
            return view('list',['members'=>$data]);
    }

    function addData(Request $req) 
    {

            $member= new User;

            $member->name=$req->name;
            $member->address=$req->address;
            $member->mail=$req->mail;
            $member->save();    

            return redirect("list");
    }

    function delete($id)
    {

        $data= User::find($id);
        $data->delete();

        return redirect("list");
    }

    function showData($id)
    {

        $data= User::find($id);
        return view ('edit',['data'=>$data]);
    }

    function update(Request $req)
    {

        $data=User::find($req->id);
        $data->name=$req->name;
        $data->address=$req->address;
        $data->mail=$req->mail;
        $data->save();

        return redirect('list');
    }

    function operation()
    {

        return  DB::table('users')->sum('id'); 

    }
}
