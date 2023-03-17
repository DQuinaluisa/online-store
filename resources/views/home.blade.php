@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row ">
       <div class="col-md-1">

       </div>
       <div class="col-md-10">

       <div class="row">
        @foreach ($products as $items )
        <div style="padding: 2%" class="col-md-4">


            <div style="box-shadow: 10px 5px 5px rgb(180, 179, 179);" class="card text-center">

                <div style="margin: 10%; border:none" class="card" >
                    <img style="height: 25vh; border-radius:10% " src={{"http://localhost:8000/stortage/$items->photo"}} alt="">
               </div>

               <h3 style="font-weight: 600;" >{{ $items->product_name }}</h3>

               {{-- <span>Detalles</span>

               <p>{{ $items->description }}</p> --}}

               <div class="row" style="margin: 2%">
                    <div class="col-md-6">
                        <samp>Precio</samp>
                        <h2 style="color:green" >${{ $items->price }}</h2>
                    </div>
                    <div class="col-md-6">
                        <div style="padding-top: 15%">
                            <button  class="btn btn-outline-primary"><i class="fa-solid fa-cart-shopping"></i></button>
                        </div>

                    </div>
               </div>
            </div>
        </div>
        @endforeach
       </div>


       </div>
       <div class="col-md-1">

       </div>
    </div>
</div>
@endsection
