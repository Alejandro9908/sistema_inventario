<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$cli->id_cliente}}">

    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Cliente</h4>
			</div>
			<div class="modal-body">
				<p>¿Esta seguro que desea eliminar este cliente?</p>
			</div>
			<div class="modal-footer">
                @include('ventas.cliente.delete')
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<!--<button type="submit" class="btn btn-primary">Confirmar</button>-->
			</div>
		</div>
    </div>

</div>
