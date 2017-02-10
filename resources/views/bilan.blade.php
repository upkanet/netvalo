{{$company->name}}<br>
{{$bilan->year}}
<ul>
@foreach ($fields as $field_key => $field_name)
	<li>{{$field_name}} : {{$bilan->getAttribute($field_key)}}</li>
@endforeach
</ul>