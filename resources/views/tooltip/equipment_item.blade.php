<div class="outer item_info">
	<div class="insider">
		<p>[item: {{$item->id}}]</p>
		<div class="item-icon"><img src="/theme/2.7/images/icons/{!! strtolower($item->icon_name)!!}.png" alt="icon" width="40" height="40"></div> 
		<table class="item_table">
			<tr>
				<td><table class="item_stats_table">
					<tr><td colspan="5" class="item_title quality-{{$item->quality}}">@if($lang == 'fr'){{$item->desc_fr}}@elseif($lang == 'en'){{$item->desc_en}}@endif</td></tr> 
					<tr><td style="width: 32%">Type</td><td style="width: 15%">&nbsp;</td><td style="width: 6%">&nbsp;</td><td style="width: 32%">&nbsp;</td><td style="width: 15%">
					@if($item->weapon_type != '')
						@lang('item.weapon_type.'.$item->weapon_type)
					@elseif($item->armor_type == 'no_armor')
						@lang('item.armor_type.'.$item->equipment_slots)
					@elseif($item->armor_type != '')
						@lang('item.armor_type.'.$item->armor_type)
					@elseif($item->equipment_slots != '')
						@lang('item.armor_type.'.$item->equipment_slots)
					@endif
					</td></tr>
					<tr><td colspan="5" width="100%" style="color: #efdfa7;">
						@if($item->can_exchange == 0) @lang('general.equipment_item.cannot_exchange')
						@else @lang('general.equipment_item.soul_blind')
						@endif
						@if($item->can_deposit_to_character_warehouse == 0) @lang('general.equipment_item.cannot_deposit_to_character_warehouse')
						@else
							@if($item->can_deposit_to_account_warehouse == 0) @lang('general.equipment_item.cannot_deposit_to_account_warehouse')
							@endif
							@if($item->can_deposit_to_guild_warehouse == 0) @lang('general.equipment_item.cannot_deposit_to_guild_warehouse')
							@endif
						@endif
						@if($item->can_composite_weapon == 0 && $item->weapon_type != '') @lang('general.equipment_item.cannot_composite_weapon')
						@endif
						@if($item->soul_bind == 1)
							@lang('general.equipment_item.soul_blind')
						@endif
					</td></tr>
					@if($item->race_permited == 'pc_light') <tr><td colspan="5">@lang('general.equipment_item.rp_light')</td></tr>
					@elseif($item->race_permited == 'pc_dark') <tr><td colspan="5">@lang('general.equipment_item.rp_dark')</td></tr>
					@endif
					<tr><td colspan="5"><hr class="hr_long"></td></tr>
					@if($item->weapon_type != '')
						<tr><td colspan="3" style="color: #efdfa7;">@lang('item.weapon_impact.'.$item->weapon_type, ['qty' => $item->hit_count, 'impact' => Lang::choice('general.equipment_item.impact', $item->hit_count)]) 
						@if($item->attack_type == 'magical_water')
							(@lang('general.equipment_item.at_magical_water'))
						@elseif($item->attack_type == 'magical_fire')
							(@lang('general.equipment_item.at_magical_fire'))
						@endif</td></tr><tr>
						<tr><td>@lang('general.equipment_item.damage_range')</td><td>{{$item->min_damage}} - {{$item->max_damage}}</td><td>&nbsp;</td><td>@lang('general.equipment_item.attack_delay')</td><td>{{$item->attack_delay / 1000}}</td></tr>
						<tr>
						@php $i = 1; @endphp
						@foreach(Lang::get('item.weapon_main_stats') as $key => $value) 
							@if($item->$key > 0)
								<td>{{$value}}</td><td>{{$item->$key}}</td>
								@if($i++ % 2 == 0) </tr><tr>
								@else <td>&nbsp;</td>
								@endif
							@endif
						@endforeach
						</tr>
					@elseif($item->armor_type != '')
						<tr>
						@php $i = 1; @endphp
						@foreach(Lang::get('item.armor_main_stats') as $key => $value)
							@if($item->$key > 0)
								<td>{{$value}}</td><td>{{$item->$key}}</td>
								@if($i++ % 2 == 0) </tr><tr>
								@else <td>&nbsp;</td>
								@endif
							@endif
						@endforeach
						</tr>
					@elseif($item->equipment_slots != '')
						<tr>
						@php $i = 1; @endphp
						@foreach(Lang::get('item.accessory_main_stats') as $key => $value)
							@if($item->$key > 0)
								<td>{{$value}}</td><td>{{$item->$key}}</td>
								@if($i++ % 2 == 0) </tr><tr> 
								@else <td>&nbsp;</td>
								@endif
							@endif
						@endforeach
						</tr>
					@endif
					<tr><td colspan="5"><hr class="hr_long"></td></tr>
					<tr>
					@for($j = 1; $j <= 12; $j++)
						@php $bonusName = 'bonus_attr'.$j; @endphp
						@if($item->$bonusName != NULL) 
							@php
							$loop++;
							$array = explode(" ", $item->$bonusName);
							$name = strtolower($array[0]);
							$value = $array[1];
							if(in_array($name, array('pvpdefendratio','boosthate','pvpattackratio'))) {
								$value = ($array[1] / 10) . "%";
							}
							$value = str_replace('+-', '-', '+' . $value);
							@endphp
							<td>@lang('item.item_sub_stats.'.$name)</td><td>{{$value}}</td>
							@if($loop % 2 == 0) </tr><tr> @else <td>&nbsp;</td> @endif 
						@endif
					@endfor
					</tr>
					@if($item->msSlot > 0) 
						<tr><td colspan="5"><hr class="hr_long"></td></tr>
						<tr><td colspan="5">@lang('general.equipment_item.mana_stone', ['msLevel' => $item->msLevel])</td></tr>
						<tr>
						@for($k = 1; $k <= $item->msSlot; $k++)
							<td colspan="2"><img src="/theme/2.7/images/ms-socket.png" /></td>
							@if($k % 2 == 0) </tr><tr> @endif 
						@endfor
						@if($item->option_slot_bonus == 1)
							<td colspan="2"><img src="/theme/2.7/images/ms-socket-optionnal.png" /></td>
						@endif
						</tr>
					@endif
					<tr><td colspan="5"><hr class="hr_long"></td></tr>
					@if($item->can_proc_enchant == 1) 
						<tr><td colspan="5" style="color: #efdfa7;">@lang('general.equipment_item.can_proc_enchant')</td></tr>
					@endif
					<tr><td colspan="5">@if($lang == 'fr'){{nl2br(e($item->desc_long_fr))}}@elseif($lang == 'en'){{nl2br(e($item->desc_long_en))}}@endif</td></tr>
				</table></td>
			</tr>
		</table>
	</div>
</div>