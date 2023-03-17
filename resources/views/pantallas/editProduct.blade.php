@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <div class="card ">
                <form style="margin: 5%" action="{{ route('pantallas.editProduct', $product->id) }}" enctype="multipart/form-data" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group ">
                        <label for="">Nombre del Producto</label>
                        <input type="product_name" name="product_name" class="form-control"  value="{{ $product->product_name }}" placeholder="Nombre del Producto"/>
                        <br>
                        <label for="">Precio</label>
                        <input type="price" name="price" class="form-control"  value="{{ $product->price }}" placeholder="Precio del Producto"/>
                        <br>
                        <label for="">Cantidad</label>
                        <input type="stock" name="stock" class="form-control"  value="{{ $product->stock }}" placeholder="Cantidad"/>
                        <br>
                        <label for="">Imagen del Producto</label>
                        <input type="file" name="file" class="form-control"  value="{{ $product->photo }}" placeholder="Nombre del Producto"/>
                        <br>
                        <label for="">Descripcion del Producto</label>
                        <textarea class="form-control" name="description"  placeholder="Descripcion del Producto">{{ $product->description }}</textarea>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning ">Actualizar producto</button>
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
