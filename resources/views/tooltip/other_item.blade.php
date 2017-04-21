<div class="outer item_info">
	<div class="insider">
		<p>[item: {{$item->id}}]</p>
		<div class="item-icon"><img src="/theme/2.7/images/icons/{!! strtolower($item->icon_name)!!}.png" alt="icon" width="40" height="40"></div> 
		<table class="item_table">
			<tr>
				<td><table class="item_stats_table">
					<tr><td colspan="4" class="item_title quality-{{$item->quality}}">@if($lang == 'fr'){{$item->desc_fr}}@elseif($lang == 'en'){{$item->desc_en}}@endif</td></tr>
					<tr><td style="width: 35%">Type</td><td style="width: 15%">&nbsp;</td><td style="width: 35%">&nbsp;</td><td style="width: 15%">
					@if($item->skill_to_learn != '')
						@lang('item.skill_learn.book') 
					@elseif($item->gain_skill1 != '')
						@lang('item.skill_learn.stigma')
					@endif
					</td></tr>
					@foreach(Lang::get('item.aion_class') as $key => $value) 
						@if($item->$key > 0)
							<tr><td colspan="4">
								Disponible pour {{$value}} de niveau {{$item->$key}} et supérieur
							</td></tr>
						@endif
					@endforeach
					@if($item->race_permited == 'pc_light') <tr><td colspan="4">Réservé aux Elyséens</td></tr>
					@elseif($item->race_permited == 'pc_dark') <tr><td colspan="4">Réservé aux Asmodiens</td></tr>
					@endif
					<tr><td colspan="4"><hr class="hr_long"></td></tr>
					<tr><td colspan="4">{!! nl2br(e($item->desc_long_fr)) !!}</td></tr>
				</table></td>
			</tr>
		</table>
	</div>
</div>