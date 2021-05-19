@extends('layouts.layout')
        
@section("con")   

    <div class="flex-center position-ref full-height">
    
        <div>
                <div> <h1>Pizza List</h1></div>
        </div> 

           <img src=/images/123.jpg style=padding-top:100px>
          
           @foreach($pizzas as $p)
           

           <div>{{$loop->index}}--{{ $p['type'] }} --- {{ $p['crust'] }} --- {{ $p['price'] }}</div><br>

           @endforeach


    </div>
@endsection
