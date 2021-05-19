<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
         $pizzas=
         [
             ['type'=> 'Hawaiin' , 'crust'=> 'stuffed','price'=>10],
              ['type'=> 'Arabian' , 'crust'=> 'cheesay','price'=>20],
              ['type'=> 'Speical' , 'crust'=> 'thin'   ,'price'=>30]
         ];
 
            return view( 'pizzas' , ['pizzas'=> $pizzas]);
    }
    public function show($id)
    {
        
        return view('pizzas',['i'=>$id]); 
    }

}
