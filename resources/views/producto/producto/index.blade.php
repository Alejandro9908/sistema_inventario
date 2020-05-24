@extends('layouts.admin')
@section('contenido')
    <!--regilla bootstrap
    col-xs-(numero de columnas)
        telefonos =< 768px
    col-sm-(numero de columnas)
        tablets => 768px
    col-md-(numero de columnas)
        laptop/desktop => 992px
    col-lg-(numero de columnas)
        large desktop => 1200px
    -->

    <div class="row">  
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Articulos</h3>
            @include('producto.producto.search')
            <a href="producto/create"><button class="btn bg-olive"><i class="fa fa-plus"></i>   Nuevo Articulo</button></a>
        </div> 
    </div>
    <hr>
    <div class="row">  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table_responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CATEGORIA</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
                        <th>STOCK</th>
                        <th>ESTADO</th>
                        <th>OPCIONES</th>
                    </thead>
                    @foreach ($productos as $prod)
                    <tr>
                        <td>{{$prod->id_producto}}</td>
                        <td>{{$prod->nombre}}</td>
                        <td>{{$prod->categoria}}</td>
                        <td>{{$prod->descripcion}}</td>
                        <td>{{$prod->precio}}</td>
                        <td>{{$prod->stock}}</td>
                        <td>{{$prod->estado}}</td>
                        <td>
                            <a href="{{URL::action('ProductoController@edit',$prod->id_producto)}}"><button class="btn bg-purple"><i class="fa fa-eye"></i></button></a>
                            <a href="" data-target="#modal-delete-{{$prod->id_producto}}" data-toggle="modal"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                        </td>
                    </tr>
                    @include('producto.producto.modal')
                    @endforeach
                    
                </table>
            </div>
            {{$productos->render()}}
        </div> 
    </div>

@endsection