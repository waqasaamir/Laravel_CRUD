<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyAPI extends Controller
{
    //
    function getdata()
    {
            return["name"=>"WaqasAamir","address"=>"Lahore","mail"=>"waqas@test.com"];

    }
}
