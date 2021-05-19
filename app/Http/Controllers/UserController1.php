<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Validator;
// php .\artisan route:list 

class UserController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ["list"=>"API Controller"];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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
}
