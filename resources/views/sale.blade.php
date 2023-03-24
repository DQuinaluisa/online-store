@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <table class="table ">
                <thead style="background-color: rgb(27, 27, 27);" >
                  <tr>
                    <th class="text-center" style="color: white" scope="col">#</th>
                    <th class="text-center" style="color: white" scope="col">Cantidad</th>
                    <th class="text-center " style="color: white" scope="col">Foto</th>
                    <th class="text-center" style="color: white" scope="col">Producto</th>
                    <th class="text-center " style="color: white" scope="col">Modelo</th>
                    <th class="text-center" style="color: white" scope="col">Precio</th>



                  </tr>
                </thead>
                <tbody>
                    @foreach ($cartCollection as $items)
                    <tr>
                        <th></th>
                        <th class="text-center" scope="row">{{ $items->quantity }}</th>
                        <th  class="text-center" scope="row"><img style="height: 10vh" src="http://localhost:8000/stortage/{{$items->attributes->image}}" alt=""></th>
                        <th  class="text-center" scope="row">{{ $items->name }}</th>
                        <th  class="text-center" scope="row">{{ $items->attributes->slug }}</th>
                        <th  class="text-center" scope="row">{{ $items->price }}</th>




                    </tr>
                    @endforeach


                </tbody>
              </table>

              <div class="card">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <p>SubTotal  ${{ \Cart::get($items->id)->getPriceSum() }}<br></p>
                        <hr>
                        <p>IVA</p>
                        <hr>
                        <P>TOTAL</P>
                        <hr>

                        <hr>
                    </div>
                </div>
              </div>
        </div>
        <div class="col-md-1">

        </div>
    </div>
</div>


@endsection
