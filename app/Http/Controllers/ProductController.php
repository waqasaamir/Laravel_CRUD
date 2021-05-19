<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\product;

class ProductController extends Controller
{
    function li()
    {
        
       
        return product::all();
        return DB::table('users')->get();
        return DB::connection("mysql2")->table('products')->get();
        
        
    }
}
