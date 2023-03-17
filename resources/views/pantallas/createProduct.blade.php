@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <div class="card ">
                <form style="margin: 5%" action="{{ route('pantallas.createProduct') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group ">
                        <label for="">Nombre del Producto</label>
                        <input type="product_name" name="product_name" class="form-control"  placeholder="Nombre del Producto"/>
                        <br>
                        <label for="">Precio</label>
                        <input type="price" name="price" class="form-control"  placeholder="Precio del Producto"/>
                        <br>
                        <label for="">Cantidad</label>
                        <input type="stock" name="stock" class="form-control"  placeholder="Cantidad"/>
                        <br>
                        <label for="">Imagen del Producto</label>
                        <input type="file" name="file" class="form-control"  placeholder="Nombre del Producto"/>
                        <br>
                        <label for="">Descripcion del Producto</label>
                        <textarea class="form-control" name="description" placeholder="Descripcion del Producto"></textarea>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success ">Crear nuevo producto</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-3">

        </div>
    </div>
</div>
@endsection
