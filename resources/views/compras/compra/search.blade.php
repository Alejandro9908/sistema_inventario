{!! Form::open(array('url'=>'compras/compra','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}

<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar Proveedor" value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-succes"><i class="fa fa-search"></i></button>
		</span>
	</div>
</div>

{{Form::close()}}



