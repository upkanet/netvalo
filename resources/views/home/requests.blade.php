<table class="table table-hover">
    <thead>
        <tr>
            <td><strong>Demandes</strong></td>
            <td><strong>Date</strong></td>
            <td><strong>Soci&eacute;t&eacute;</strong></td>
            <td><strong>Valorisation</strong></td>
            <td><strong>Statut</strong></td>
        </tr>
    </thead>
    <tbody>
        @if(count($requests) > 0)
        @foreach($requests as $r)
        <tr class="@if($r->level->level == -1) text-danger @elseif($r->level->level == 5) success @elseif($r->level->level == 3) warning @endif">
            <td>
                {{$r->type->name}}
            </td>
            <td>
                {{datejour($r->created_at)}}
            </td>
            <td>
                {{$r->company->name}}
            </td>
            <td>
                {{$r->valoDetails()}} ({{$r->valo_year}})
            </td>
            <td>
                {{$r->level->name}}
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="5">Aucune demande effectu&eacute;e pour l'instant</td>
        </tr>
        @endif
    </tbody>
</table>