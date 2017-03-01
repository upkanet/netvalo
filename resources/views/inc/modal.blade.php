<div class="modal fade" id="{{$modal_id or ""}}" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="{{$modal_id or ""}}-title">{{$modal_title or ""}}</h4>
			</div>
			<div class="modal-body">
				{{$slot}}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
				<button type="button" class="btn btn-primary" id="{{$modal_id or ""}}-send-btn">Envoyer</button>
			</div>
		</div>
	</div>
</div>