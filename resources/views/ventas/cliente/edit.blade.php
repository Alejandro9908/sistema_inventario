@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Cliente:</h3>
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
	{!!Form::model($cliente,['method'=>'PATCH','route'=>['ventas.cliente.update',$cliente->id_cliente],'files'=>'true'])!!}
    {{Form::token()}}
    <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="dpi">DPI</label>
            	<input disabled type="text" name="dpi" id="dpi" required value="{{$cliente->dpi}}" class="form-control" placeholder="Numero único de identificacion">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="nombres">Nombres</label>
            	<input disabled type="text" name="nombres" id="nombres" required value="{{$cliente->nombres}}" class="form-control" placeholder="Nombres del cliente">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="apellidos">Apellidos</label>
            	<input disabled type="text" name="apellidos" id="apellidos" required value="{{$cliente->apellidos}}" class="form-control" placeholder="Apellidos del cliente">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="telefono">Teléfono</label>
            	<input disabled type="text" name="telefono" id="telefono" required value="{{$cliente->telefono}}" class="form-control" placeholder="Número">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="correo">Correo</label>
            	<input disabled type="text" name="correo" id="correo" value="{{$cliente->correo}}" class="form-control" placeholder="Correo electronico">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="direccion">Dirección</label>
            	<input disabled type="text" name="direccion" id="direccion" value="{{$cliente->direccion}}" class="form-control" placeholder="Direccion del cliente">
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
				$("#dpi").prop('disabled', false);
				$("#nombres").prop('disabled', false);
				$("#apellidos").prop('disabled', false);
				$("#correo").prop('disabled', false);
				$("#telefono").prop('disabled', false);
				$("#direccion").prop('disabled', false);
				$("#botones").show();
			});

			$("#btnCancelar").click(function(){
				$("#dpi").prop('disabled', true);
				$("#nombres").prop('disabled', true);
				$("#apellidos").prop('disabled', true);
				$("#correo").prop('disabled', true);
				$("#telefono").prop('disabled', true);
				$("#direccion").prop('disabled', true);
				$("#botones").hide();
			});
		});

	</script>
@endpush          
	
@endsection