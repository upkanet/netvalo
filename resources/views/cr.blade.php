{{$company->name}}<br>
{{$cr->year}}
<ul>
@foreach ($fields as $field_key => $field_name)
	<li>{{$field_name}} : {{$cr->getAttribute($field_key)}}</li>
@endforeach
</ul>