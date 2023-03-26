@extends('layouts.app')

@section('content')

        <h2>Lista de Comprobantes</h2>



            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">

                        <div class="row">
                            <br>
                            @foreach ($sales as $item )
                            <div style="padding: 2%" class="col-md-12">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2>Comprobante</h2>
                                        </div>
                                        <div class="col-md-6">
                                           <label for="">Fecha: </label>
                                           <samp>{{ $item->date }}</samp>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Cliente: </label>
                                            <samp>{{ $item->user_name }}</samp>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Cedula: </label>
                                            <samp>{{ $item->ci }}</samp>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Detalles de la Factura</p>
                                            <div class="card">

                                            </div>
                                        </div>
                                    </div>

                                    @for($i=0; $i < count($item->name); $i++)

                                    {{ $item->name[$i] }}
                                    ${{ $item->price[$i] }}
                                    {{ $item->quantity[$i] }}
                                    @endfor
                                </div>
                            </div>





                        @endforeach
                        </div>



                        <br>

                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>


@endsection
