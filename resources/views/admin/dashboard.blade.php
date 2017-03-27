@extends('layouts.app')

@section('title','Mes entreprises')

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="css/welcome.css">
@endsection

@section('js')
@parent
<script src="js/home.js"></script>
@endsection

@section('content')
<div class="col-sm-6">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Liasses fiscales</h3>
		</div>
		<div class="panel-body">
			<ul>
			@foreach($users as $user)
				<li>{{$user->name}} - {{$user->created_at}}
					<ul>
						@foreach($user->companies as $company)
							<li>{{$company->name}} - {{$company->created_at}} - {{$company->modified_at}}
								<ul>
									@foreach($company->bilans as $bilan)
										<li>Bilan {{$bilan->year}} - {{$bilan->created_at}} - {{$bilan->modified_at}}</li>
									@endforeach
									@foreach($company->crs as $cr)
										<li>CR {{$cr->year}} - {{$cr->created_at}} - {{$cr->modified_at}}</li>
									@endforeach
								</ul>
							</li>
						@endforeach
					</ul>
				</li>
			@endforeach
			</ul>
		</div>
	</div>
</div>
<div class="col-sm-6">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Requests</h3>
		</div>
		<div class="panel-body">
			<ul>
			@foreach($users as $user)
				<li>{{$user->name}} - {{$user->created_at}}
					<ul>
						@foreach($user->requests as $request)
							<li>{{$request->type->name}} - {{$request->created_at}} - {{$request->modified_at}}</li>
						@endforeach
					</ul>
				</li>
			@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection