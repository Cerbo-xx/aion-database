@extends('_layouts.master')

@section('content')
		<div class="row" style="border: 2px solid white;">
			<div class="col-md-12">
				@if(count($items) === 0)
					<center>Aucun résultat trouvé.</center>
				@else
				{{$type}} (affichage de {{count($items)}} objets)
				<table id="dataSource" class="table table-striped compact" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th style="width: 80px;">ID</th>
							<th style="width: 40px;">&nbsp;</th>
							<th>Nom</th>
							<th style="width: 40px;">Niveau</th>
							<th style="width: 40px;">Race</th>
						</tr>
					</thead>
					<tbody>
					@foreach($items as $item)<tr>
						<td class="strong">{{$item->id}}</td>
						<td class="strong"><img src="/items/{!! strtolower($item->icon_name)!!}.png" /></td>
						<td class="strong"><a href="{{Route('item.id', ['id' => $item->id])}}"><span class="quality-{{$item->quality}}">{{$item->desc_fr}}</span></a></td>
						<td class="strong">{{$item->level}}</td>
						<td class="strong">
							@if($item->race_permited == 'pc_light') <img src="{!! asset('items/light.png') !!}" />
							@elseif($item->race_permited == 'pc_dark') <img src="{!! asset('items/dark.png') !!}" />
							@elseif(strpos($item->desc, '_LIGHT_') !== false) <img src="{!! asset('items/light.png') !!}" />
							@elseif(strpos($item->desc, '_DARK_') !== false) <img src="{!! asset('items/dark.png') !!}" />
							@endif
						</td>
					</tr>
					@endforeach
				  </tbody>
				</table>
				{!! $items->render() !!}
				@endif
			</div>
		</div>
@stop
