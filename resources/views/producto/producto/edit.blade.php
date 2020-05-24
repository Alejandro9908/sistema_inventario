@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Articulo:</h3>
			<button class="btn btn-info" id="btnEditar"><i class="fa fa-pencil"></i>   Editar</button>
            <hr>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
	{!!Form::model($producto,['method'=>'PATCH','route'=>['producto.producto.update',$producto->id_producto],'files'=>'true'])!!}
    {{Form::token()}}
    <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input disabled type="text" name="nombre" id="nombre" required value="{{$producto->nombre}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="nombre">Categoria</label>
            	<select disabled name="id_categoria" id="id_categoria" class="form-control">
					@foreach ($categorias as $cat)
						@if ($cat->id_categoria == $producto->id_categoria)
						<option value="{{$cat->id_categoria}}" selected>{{$cat->nombre_categoria}}</option>
						@else
						<option value="{{$cat->id_categoria}}" >{{$cat->nombre_categoria}}</option>
						@endif
					@endforeach
				</select>
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="descripcion">Descripción</label>
            	<input disabled type="text" name="descripcion" id="descripcion" value="{{$producto->descripcion}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="stock">Stock</label>
            	<input disabled type="text" name="stock" id="stock" value="{{$producto->stock}}" class="form-control">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="precio_venta">Precio Unitario</label>
            	<input disabled type="text" name="precio_venta" id="precio_venta" value="{{$producto->precio_venta}}" class="form-control">
            </div>
		</div> 
		<hr>
	</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group"  id="botones" style="display: none">
            	<button class="btn btn-primary" type="submit"><i class="fa fa-check-square-o"></i> Guardar</button>
            	<button class="btn btn-danger" type="reset" id="btnCancelar"><i class="fa fa-remove"></i> Cancelar</button>
            </div>
		</div>
                 
	{!!Form::close()!!}		

	@push('scripts')
	<script>
		$(document).ready(function(){
			$("#btnEditar").click(function(){
				$("#nombre").prop('disabled', false);
				$("#descripcion").prop('disabled', false);
				$("#stock").prop('disabled', false);
				$("#precio_venta").prop('disabled', false);
				$("#id_categoria").prop('disabled', false);
				$("#botones").show();
			});

			$("#btnCancelar").click(function(){
				$("#nombre").prop('disabled', true);
				$("#descripcion").prop('disabled', true);
				$("#stock").prop('disabled', true);
				$("#precio_venta").prop('disabled', true);
				$("#id_categoria").prop('disabled', true);
				$("#botones").hide();
			});
		});

	</script>
@endpush
	
@endsection