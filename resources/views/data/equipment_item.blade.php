@extends('_layouts.master')

@section('content')
		<div class="row" style="border: 2px solid white; min-height: 300px;">
			<div class="col-md-12">
				<div class="outer item_info">
					<div class="insider">
						<p>[item: {{$item->id}}]</p>
						<div class="item-icon"><img src="/items/{!! strtolower($item->icon_name)!!}.png" alt="icon" width="40" height="40"></div> 
						<table class="item_table">
							<tr>
								<td><table class="item_stats_table">
									<tr><td colspan="4" class="item_title quality-{{$item->quality}}">{{$item->desc_fr}}</td></tr>
									<tr><td style="width: 35%">Type</td><td style="width: 15%">&nbsp;</td><td style="width: 35%">&nbsp;</td><td style="width: 15%">
									@if($item->weapon_type != '')
										@lang('aion.weapon_type.'.$item->weapon_type)
									@elseif($item->armor_type == 'no_armor')
										@lang('aion.armor_type.'.$item->equipment_slots)
									@elseif($item->armor_type != '')
										@lang('aion.armor_type.'.$item->armor_type)
									@elseif($item->equipment_slots != '')
										@lang('aion.armor_type.'.$item->equipment_slots)
									@endif
									</td></tr>
									<tr><td colspan="4" width="100%" style="color: #efdfa7;">
										@if($item->can_exchange == 0) Impossible &agrave; &eacute;changer, 
										@else Objet lié
										@endif
										@if($item->can_deposit_to_character_warehouse == 0) Impossible &agrave; stocker dans un entrep&ocirc;t 
										@else
											@if($item->can_deposit_to_account_warehouse == 0) Impossible &agrave; stocker dans l&#39;entrep&ocirc;t du compte, 
											@endif
											@if($item->can_deposit_to_guild_warehouse == 0) Impossible de stocker dans l&#39;entrep&ocirc;t de L&eacute;gion 
											@endif
										@endif
										@if($item->can_composite_weapon == 0 && $item->weapon_type != '') Impossible &agrave; fusionner 
										@endif
										@if($item->soul_bind == 1)
											Objet lié
										@endif
									</td></tr>
									@if($item->race_permited == 'pc_light') <tr><td colspan="4">Réservé aux Elyséens</td></tr>
									@elseif($item->race_permited == 'pc_dark') <tr><td colspan="4">Réservé aux Asmodiens</td></tr>
									@endif
									<tr><td colspan="4"><hr class="hr_long"></td></tr>
									@if($item->weapon_type != '')
										<tr><td colspan="2" style="color: #efdfa7;">Arme à @lang('aion.weapon_impact.'.$item->weapon_type, ['qty' => $item->hit_count, 'impact' => $item->hit_count > 1 ? 'impacts' : 'impact']) 
										@if($item->attack_type == 'magical_water')
											(eau)
										@elseif($item->attack_type == 'magical_fire')
											(feu)
										@endif</td></tr><tr>
										<tr><td>Attaque</td><td>{{$item->min_damage}} - {{$item->max_damage}}</td><td>Vit. d'attaque</td><td>{{$item->attack_delay / 1000}}</td></tr>
										<tr>
										@php $i = 1; @endphp
										@foreach(Lang::get('aion.weapon_main_stats') as $key => $value) 
											@if($item->$key > 0)
												<td>{{$value}}</td><td>{{$item->$key}}</td>
												@if($i++ >= 2) </tr><tr>@php if($i >= 2) $i = 1; @endphp
												@endif
											@endif
										@endforeach
										</tr>
									@elseif($item->armor_type != '')
										<tr>
										@php $i = 1; @endphp
										@foreach(Lang::get('aion.armor_main_stats') as $key => $value)
											@if($item->$key > 0)
												<td>{{$value}}</td><td>{{$item->$key}}</td>
												@if($i++ % 2 == 0) </tr><tr> @endif
											@endif
										@endforeach
										</tr>
									@elseif($item->equipment_slots != '')
										<tr>
										@php $i = 1; @endphp
										@foreach(Lang::get('aion.accessory_main_stats') as $key => $value)
											@if($item->$key > 0)
												<td>{{$value}}</td><td>{{$item->$key}}</td>
												@if($i++ % 2 == 0) </tr><tr> @endif
											@endif
										@endforeach
										</tr>
									@endif
									<tr><td colspan="4"><hr class="hr_long"></td></tr>
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
											<td>@lang('aion.item_sub_stats.'.$name)</td><td>{{$value}}</td>
											@if($loop % 2 == 0) </tr><tr> @endif 
										@endif
									@endfor
									</tr>
									@if($item->msSlot > 0) 
										<tr><td colspan="4"><hr class="hr_long"></td></tr>
										<tr><td colspan="4">Emplacements pour Pierre de mana (niveau {{$item->msLevel}} maximum)</td></tr>
										<tr>
										@for($k = 1; $k <= $item->msSlot; $k++)
											<td colspan="2"><img src="/img/ms-socket.png" /></td>
											@if($k % 2 == 0) </tr><tr> @endif 
										@endfor
										@if($item->option_slot_bonus == 1)
											<td colspan="2"><img src="/img/ms-socket-optionnal.png" /></td>
										@endif
										</tr>
									@endif
									<tr><td colspan="4"><hr class="hr_long"></td></tr>
									@if($item->can_proc_enchant == 1) 
										<tr><td colspan="4" style="color: #efdfa7;">Cavit&eacute; de pierre divine disponible</td></tr>
									@endif
									<tr><td colspan="4">{!! nl2br(e($item->desc_long_fr)) !!}</td></tr>
								</table></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
@stop
