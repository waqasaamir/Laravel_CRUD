<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Validator;


class UserController extends Controller
{
    function index()
    {
    
            return   DB::select("select *from users");
    
    }

    function list($id=null)
    {
            return $id?User::find($id ):User::all(); 
    }

    function add(Request $req)
    {
        
        $user= new User;
        $user->name=$req->name;
        $user->address=$req->address;
        $user->mail=$req->mail;
        $result=$user->save();
        if($result)
        {
            return["result"=>"Data has been SAVED"];    
        }
        else
        {
            return ["result"=>"SAVE Operation Failed"];     
        }
    }

        function update(Request $req)
    {
            $user= User::find($req->id);    
            $user->name=$req->name;
            $user->address=$req->address;
            $user->mail=$req->mail;
            $result=$user->save();
            if($result)
            {
                return["result"=>"Data has been UPDATED"];    
            }
            else
            {
                return ["result"=>"UPDATE Operation Failed"];
            }
    }
    

    function delete($id)
    {
        $user= User::find($id);
       
        $result=$user->delete();

        if($result)
        {
            return["Record has been DELETED.."];
        }
        else
        {
            return["Record not DELETED.."];
        } 
     }
        

    function search($name)
    {
        $result=User::where("name", "like", "%".$name."%")->get();
        if(count($result))
        {
            return $result;
        }
        else
        {
            return "No Record Found!";
        }
    }

    function testData(Request $req)
    {
        $rules=array
        (
            "name"=>"required|min:3|max:10"
        );
        $validator=Validator::make($req->all(),$rules);    
        if($validator->fails())
        {
            return response()->json($validator->errors(),401);
        }
        else
        {
            $user= new User;
            $user->name=$req->name;
            $user->address=$req->address;
            $user->mail=$req->mail;
            $result=$user->save();

            if($result)
            {
                return["result"=>"Data has been SAVED"];  
            }
            else
            {
                return ["result"=>"SAVE Operation Failed"];
            }
        }
    }
}