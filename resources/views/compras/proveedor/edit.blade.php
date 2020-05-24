@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Proveedor:</h3>
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
	{!!Form::model($proveedor,['method'=>'PATCH','route'=>['compras.proveedor.update',$proveedor->id_proveedor],'files'=>'true'])!!}
    {{Form::token()}}
    <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="nit">Nit</label>
            	<input disabled type="text" name="nit" id="nit" required value="{{$proveedor->nit}}" class="form-control" placeholder="Nit de la empresa">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="razon_social">Nombre</label>
            	<input disabled type="text" name="razon_social" id="razon_social" required value="{{$proveedor->razon_social}}" class="form-control" placeholder="Nombres de la empresa">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="descripcion">Descripcion</label>
            	<input disabled type="text" name="descripcion" id="descripcion" required value="{{$proveedor->descripcion}}" class="form-control" placeholder="Descripcion..(opcional)">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="telefono">Teléfono</label>
            	<input disabled type="text" name="telefono" id="telefono" required value="{{$proveedor->telefono}}" class="form-control" placeholder="Número">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="correo">Correo</label>
            	<input disabled type="text" name="correo" id="correo" value="{{$proveedor->correo}}" class="form-control" placeholder="Correo electronico">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="pagina_web">Página Web</label>
            	<input disabled type="text" name="pagina_web" id="pagina_web" value="{{$proveedor->pagina_web}}" class="form-control" placeholder="Pagina web de la empresa">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="direccion">Dirección</label>
            	<input disabled type="text" name="direccion" id="direccion" value="{{$proveedor->direccion}}" class="form-control" placeholder="Direccion de la empresa">
            </div>
		</div>
	</div>
	<hr>	
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group" id="botones" style="display: none">
            	<button class="btn btn-primary" type="submit"><i class="fa fa-check-square-o"></i> Guardar</button>
            	<button class="btn btn-danger" type="reset" id="btnCancelar"><i class="fa fa-remove"></i> Cancelar</button>
            </div>
		</div>
                 
	{!!Form::close()!!}		
	@push('scripts')
	<script>
		$(document).ready(function(){
			$("#btnEditar").click(function(){
				$("#nit").prop('disabled', false);
				$("#razon_social").prop('disabled', false);
				$("#descripcion").prop('disabled', false);
				$("#telefono").prop('disabled', false);
				$("#correo").prop('disabled', false);
				$("#pagina_web").prop('disabled', false);
				$("#direccion").prop('disabled', false);
				$("#botones").show();
			});

			$("#btnCancelar").click(function(){
				$("#nit").prop('disabled', true);
				$("#razon_social").prop('disabled', true);
				$("#descripcion").prop('disabled', true);
				$("#telefono").prop('disabled', true);
				$("#correo").prop('disabled', true);
				$("#pagina_web").prop('disabled', true);
				$("#direccion").prop('disabled', true);
				$("#botones").hide();
			});
		});

	</script>
@endpush         
	
@endsection