@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Categoría:</h3>
			<button class="btn btn-info" id="btnEditar"><i class="fa fa-pencil"></i>   Editar</button>
			<hr>
			
			<br>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($categoria,['method'=>'PATCH','route'=>['producto.categoria.update',$categoria->id_categoria]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input disabled type="text" name="nombre_categoria" id="nombre_categoria" class="form-control" value="{{$categoria->nombre_categoria}}" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="descripcion">Descripción</label>
            	<input disabled type="text" name="descripcion" id="descripcion" class="form-control" value="{{$categoria->descripcion}}" placeholder="Descripción...">
            </div>
			<hr>
			
            <div class="form-group" id="botones" style="display: none">
				
                <button class="btn btn-primary" type="submit"><i class="fa fa-check-square-o"></i> Guardar Cambios</button>
				
				<button class="btn btn-danger" type="reset" id="btnCancelar"><i class="fa fa-remove"></i> Cancelar</button>
				
            </div>
                 
			{!!Form::close()!!}		
            
		</div>
	</div>

	@push('scripts')
	<script>
		$(document).ready(function(){
			$("#btnEditar").click(function(){
				$("#descripcion").prop('disabled', false);
				$("#nombre_categoria").prop('disabled', false);
				$("#botones").show();
			});

			$("#btnCancelar").click(function(){
				$("#descripcion").prop('disabled', true);
				$("#nombre_categoria").prop('disabled', true);
				$("#botones").hide();
			});
		});

	</script>
@endpush
@endsection