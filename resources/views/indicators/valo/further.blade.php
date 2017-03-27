<?php
    $nvrequests = config('nvrequests');
?>
<ul id="services_list">
    @foreach($nvrequests as $req_cat_key => $req_cat_data)
        @if($req_cat_key != 'Contact')
        <li><span class="glyphicon glyphicon-{{$req_cat_data['icon']}}"></span> {{$req_cat_key}}
            <ul>
                @foreach($req_cat_data as $req_type => $req_type_data)
                    @if($req_type != 'icon')
                        <li><a href="#" onclick="openRequest('{{$req_type}}');">{{$req_type_data['prompt']}}</a></li>
                    @endif
                @endforeach
            </ul>
        </li>
        @endif
    @endforeach
</ul>
<script type="text/javascript">
var req_type_dataset = {
@foreach($nvrequests as $req_cat_key => $req_cat_data)
    @foreach($req_cat_data as $req_type => $req_type_data)
        @if($req_type != 'icon')
            {{$req_type}}:{
                title: '{{$req_type_data['service']}}',
                message: '{{$req_type_data['desc']}}'
            },
        @endif
    @endforeach
@endforeach
};
</script>
<hr>
<p class="text-center">Pour toute autre demande :
<button class="btn btn-default" onclick="openRequest('contact');">Nous contacter</button>
</p>

@section('js')
@parent
<script src="{{url('/js/request.js')}}"></script>
@endsection