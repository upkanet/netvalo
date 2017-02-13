@extends('layouts.app')

@section('content')
<form action="{{ route('logout') }}" method="post">
    {{ csrf_field() }}
    <input type="submit" value="logout">
</form>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <ul>
                    @foreach ($companies as $company)
                        <li><a href="companies/{{$company->id}}">{{$company->name}}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
