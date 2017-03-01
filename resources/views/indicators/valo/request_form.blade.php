<div class="alert alert-primary" id="request_modal-message"></div>
<form id="request_form" method="POST" role="form" data-toggle="validator">
{{ csrf_field() }}
	<table class="table">
		<tbody>
			<tr>
				<td>Nom</td>
				<td>
					<div class="form-group">
						<label class="sr-only" for="modalUserNameInput">Nom</label>
						<input type="text" class="form-control" id="modalUserNameInput" placeholder="Nom" value="{{Auth::user()->name}}">
					</div>
				</td>
			</tr>
			<tr>
				<td>eMail</td>
				<td>
					<div class="form-group">
						<label class="sr-only" for="modalUserEmailInput">eMail</label>
						<input type="email" class="form-control" id="modalUserEmailInput" placeholder="email@entreprise.com" value="{{Auth::user()->email}}">
					</div>
				</td>
			</tr>
			<tr>
				<td>T&eacute;l&eacute;phone</td>
				<td>
					<div class="form-group">
						<label class="sr-only" for="modalUserPhoneInput">T&eacute;l&eacute;phone</label>
						<input type="text" class="form-control" id="modalUserPhoneInput" placeholder="0102030405" value="{{Auth::user()->phone or ""}}">
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2">Adresse</td>
			</tr>
			<tr>
				<td>Rue</td>
				<td>
					<div class="form-group">
						<label class="sr-only" for="modalUserStreetInput">Rue</label>
						<input type="text" class="form-control" id="modalUserStreetInput" placeholder="rue" value="{{Auth::user()->street or ""}}">
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="sr-only" for="modalUserCPInput">Code Postal</label>
						    <div class="input-group">
						      <div class="input-group-addon">CP</div>
						      <input type="text" class="form-control" id="modalUserCPInput" placeholder="75000" value="{{Auth::user()->cp or ""}}">
						    </div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="sr-only" for="modalUserCityInput">Ville</label>
						    <div class="input-group">
						      <div class="input-group-addon">Ville</div>
						      <input type="text" class="form-control" id="modalUserCityInput" placeholder="Ville" value="{{Auth::user()->city or ""}}">
						    </div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div id="modalRequestMessage">
						<div class="col-sm-12">
							<label for="modalMessageInput">Message</label>
						    <div class="input-group">
						      <textarea class="form-control" id="modalMessageInput" placeholder="Message" rows="3" cols="70"></textarea>
						    </div>
						</div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</form>