{{$company->name}}<br>
Bilans
<ul>
@foreach ($bilans as $bilan)
    <li><a href="../bilans/{{$bilan->id}}">{{$bilan->year}}</a></li>
@endforeach
</ul>
CRs
<ul>
@foreach ($crs as $cr)
    <li><a href="../crs/{{$cr->id}}">{{$cr->year}}</a></li>
@endforeach
</ul>