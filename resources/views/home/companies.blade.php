@foreach ($companies as $company)
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="panel panel-primary"> 
        <div class="panel-heading text-center"><span class="glyphicon glyphicon-knight" aria-hidden="true"></span> {{$company->name}}</div>
        <div class="panel-body text-center">
            <div class="col-sm-6">
                <a href="companies/{{$company->id}}" class="btn btn-sm btn-primary btn-block">Voir</a>
            </div>
            <div class="col-sm-6">
                <a href="{{route('companies.edit',$company)}}" class="btn btn-sm btn-success btn-block">Modifier</a>
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="panel panel-primary"> 
        <div class="panel-body"> <a href="{{route('companies.create')}}" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter une entreprise </a></div>
    </div>
</div>