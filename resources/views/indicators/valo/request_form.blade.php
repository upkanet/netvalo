<div class="alert alert-primary" id="request_modal-message"></div>
<form action="{{ route('requests.store') }}" id="request_form" method="POST" role="form" data-toggle="validator">
	{{ csrf_field() }}
	<input type="hidden" name="rtype" id="request_modal-rtype">
	<input type="hidden" name="company_id" value="{{$company->id}}">
	<input type="hidden" name="valo_year" value="{{$valo->year}}">
	<table class="table">
		<tbody>
			<tr>
				<td>Nom</td>
				<td>
					<div class="form-group">
						<label class="sr-only" for="modalUserNameInput">Nom</label>
						<input type="text" name="name" class="form-control" id="modalUserNameInput" placeholder="Nom" value="{{Auth::user()->name}}" required>
						<div class="help-block with-errors"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td>eMail</td>
				<td>
					<div class="form-group">
						<label class="sr-only" for="modalUserEmailInput">eMail</label>
						<input type="email" name="email" class="form-control" id="modalUserEmailInput" placeholder="email@entreprise.com" value="{{Auth::user()->email}}" required>
						<div class="help-block with-errors"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td>T&eacute;l&eacute;phone</td>
				<td>
					<div class="form-group">
						<label class="sr-only" for="modalUserPhoneInput">T&eacute;l&eacute;phone</label>
						<input type="text" name="phone" pattern="[0-9]{10}" class="form-control" id="modalUserPhoneInput" placeholder="0102030405" data-error="Veuillez respecter le format requis : 10 chiffres (sans espace)" value="{{Auth::user()->phone}}" required>
						<div class="help-block with-errors"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><strong>Adresse</strong></td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="col-sm-12">
						<div class="form-group">
							<label class="sr-only" for="modalUserStreetInput">Rue</label>
							<div class="input-group">
								<div class="input-group-addon">Rue</div>
								<input type="text" name="street" class="form-control" id="modalUserStreetInput" placeholder="rue" value="{{Auth::user()->street}}">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="sr-only" for="modalUserCPInput">Code Postal</label>
						    <div class="input-group">
						    	<div class="input-group-addon">CP</div>
						    	<input type="text" name="zipcode" class="form-control" id="modalUserCPInput" placeholder="75000" value="{{Auth::user()->zipcode}}">
						    </div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="sr-only" for="modalUserCityInput">Ville</label>
						    <div class="input-group">
						      <div class="input-group-addon">Ville</div>
						      <input type="text" name="city" class="form-control" id="modalUserCityInput" placeholder="Ville" value="{{Auth::user()->city}}" required>
						    </div>
						    <div class="help-block with-errors"></div>
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
						      <textarea name="message" class="form-control" id="modalMessageInput" placeholder="Message" rows="3" cols="70"></textarea>
						    </div>
						</div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</form>