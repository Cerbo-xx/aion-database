		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">Aion Database
				@if(Config::get('aion.enable_2_7') == true) 2.7
				@elseif(Config::get('aion.enable_3_9') == true) 3.9
				@endif </a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<div class="collapse navbar-collapse" id="collapsable-menu">
					<div class="collapse navbar-collapse bs-example-js-navbar-collapse">
						<ul class="nav navbar-nav">
						  <li class="dropdown"> <a href="#" data-toggle="dropdown">@lang('general.nav.objects') <b class="caret"></b></a>
							<ul class="dropdown-menu">
							  <li class="dropdown-header">@lang('general.nav.equipment')</li>
							  <li><a href="#" tabindex="-1">@lang('general.nav.sets')</a></li>
							  <li class="dropdown-submenu"><a href="/fr/items/weapon/" tabindex="-1">@lang('general.nav.weapons')</a>
								<ul class="dropdown-menu">
								  <li class="dropdown-header">@lang('general.nav.1h_weapons')</li> 
								  <li><a href="/fr/items/weapon/sword/" tabindex="-1">@lang('item.weapon_type.1h_sword')s</a></li>
								  <li><a href="/fr/items/weapon/mace/" tabindex="-1">@lang('item.weapon_type.1h_mace')s</a></li>
								  <li><a href="/fr/items/weapon/dagger/" tabindex="-1">@lang('item.weapon_type.1h_dagger')s</a></li>
								  <li class="dropdown-header">@lang('general.nav.2h_weapons')</li>
								  <li><a href="/fr/items/weapon/2h_sword/" tabindex="-1">@lang('item.weapon_type.2h_sword')s</a></li>
								  <li><a href="/fr/items/weapon/polearm/" tabindex="-1">@lang('item.weapon_type.2h_polearm')s</a></li>
								  <li><a href="/fr/items/weapon/staff/" tabindex="-1">@lang('item.weapon_type.2h_staff')s</a></li>
								  <li class="dropdown-header">@lang('general.nav.remote_weapons')</li>
								  <li><a href="/fr/items/weapon/bow/" tabindex="-1">@lang('item.weapon_type.bow')s</a></li>
								  <li><a href="/fr/items/weapon/orb/" tabindex="-1">@lang('item.weapon_type.2h_orb')s</a></li>
								  <li><a href="/fr/items/weapon/book/" tabindex="-1">@lang('item.weapon_type.2h_book')s</a></li>
								</ul>
							  </li>
							  <li class="dropdown-submenu"><a href="/fr/items/armor/" tabindex="-1">@lang('general.nav.armors')</a>
								<ul class="dropdown-menu">
								  <li class="dropdown-submenu"><a href="/fr/items/armor/robe/" tabindex="-1">@lang('item.armor_type.robe')</a>
									<ul class="dropdown-menu">
									  <li><a href="/fr/items/armor/robe/torso/" tabindex="-1">@lang('general.nav.torso')</a></li>
									  <li><a href="/fr/items/armor/robe/glove/" tabindex="-1">@lang('general.nav.glove')</a></li>
									  <li><a href="/fr/items/armor/robe/shoulder/" tabindex="-1">@lang('general.nav.shoulder')</a></li>
									  <li><a href="/fr/items/armor/robe/leg/" tabindex="-1">@lang('general.nav.leg')</a></li>
									  <li><a href="/fr/items/armor/robe/foot/" tabindex="-1">@lang('general.nav.foot')</a></li>
									</ul>
								  </li>
								  <li class="dropdown-submenu"><a href="/fr/items/armor/leather/" tabindex="-1">@lang('item.armor_type.leather')</a>
									<ul class="dropdown-menu">
									  <li><a href="/fr/items/armor/leather/torso/" tabindex="-1">@lang('general.nav.torso')</a></li>
									  <li><a href="/fr/items/armor/leather/glove/" tabindex="-1">@lang('general.nav.glove')</a></li>
									  <li><a href="/fr/items/armor/leather/shoulder/" tabindex="-1">@lang('general.nav.shoulder')</a></li>
									  <li><a href="/fr/items/armor/leather/leg/" tabindex="-1">@lang('general.nav.leg')</a></li>
									  <li><a href="/fr/items/armor/leather/foot/" tabindex="-1">@lang('general.nav.foot')</a></li>
									</ul>
								  </li>
								  <li class="dropdown-submenu"><a href="/fr/items/armor/chain/" tabindex="-1">@lang('item.armor_type.chain')</a>
									<ul class="dropdown-menu">
									  <li><a href="/fr/items/armor/chain/torso/" tabindex="-1">@lang('general.nav.torso')</a></li>
									  <li><a href="/fr/items/armor/chain/glove/" tabindex="-1">@lang('general.nav.glove')</a></li>
									  <li><a href="/fr/items/armor/chain/shoulder/" tabindex="-1">@lang('general.nav.shoulder')</a></li>
									  <li><a href="/fr/items/armor/chain/leg/" tabindex="-1">@lang('general.nav.leg')</a></li>
									  <li><a href="/fr/items/armor/chain/foot/" tabindex="-1">@lang('general.nav.foot')</a></li>
									</ul>
								  </li>
								  <li class="dropdown-submenu"><a href="/fr/items/armor/plate/" tabindex="-1">@lang('item.armor_type.plate')</a>
									<ul class="dropdown-menu">
									  <li><a href="/fr/items/armor/plate/torso/" tabindex="-1">@lang('general.nav.torso')</a></li>
									  <li><a href="/fr/items/armor/plate/glove/" tabindex="-1">@lang('general.nav.glove')</a></li>
									  <li><a href="/fr/items/armor/plate/shoulder/" tabindex="-1">@lang('general.nav.shoulder')</a></li>
									  <li><a href="/fr/items/armor/plate/leg/" tabindex="-1">@lang('general.nav.leg')</a></li>
									  <li><a href="/fr/items/armor/plate/foot/" tabindex="-1">@lang('general.nav.foot')</a></li>
									</ul>
								  </li>
								  <!--
								  <li class="dropdown-submenu"><a href="/fr/items/armor/no_armor/" tabindex="-1">Vêtements</a>
									<ul class="dropdown-menu">
									  <li><a href="/fr/items/armor/no_armor/torso/" tabindex="-1">@lang('general.nav.torso')</a></li>
									  <li><a href="/fr/items/armor/no_armor/glove/" tabindex="-1">@lang('general.nav.glove')</a></li>
									  <li><a href="/fr/items/armor/no_armor/shoulder/" tabindex="-1">@lang('general.nav.shoulder')</a></li>
									  <li><a href="/fr/items/armor/no_armor/leg/" tabindex="-1">@lang('general.nav.leg')</a></li>
									  <li><a href="/fr/items/armor/no_armor/foot/" tabindex="-1">@lang('general.nav.foot')</a></li>
									</ul>
								  </li>
								  -->
								  <li><a href="/fr/items/armor/no_armor/head/" tabindex="-1">@lang('item.armor_type.head')</a></li>
								  <li><a href="/fr/items/armor/no_armor/shield/" tabindex="-1">@lang('item.armor_type.sub')</a></li>
								</ul>
							  </li>
							  <li class="dropdown-submenu"><a href="/fr/items/accessory/" tabindex="-1">@lang('general.nav.accessory')</a>
								<ul class="dropdown-menu">
								  <li><a href="/fr/items/accessory/wing/" tabindex="-1">@lang('general.nav.wings')</a></li>
								  <li><a href="/fr/items/accessory/ring/" tabindex="-1">@lang('general.nav.rings')</a></li>
								  <li><a href="/fr/items/accessory/earring/" tabindex="-1">@lang('general.nav.earrings')</a></li>
								  <li><a href="/fr/items/accessory/belt/" tabindex="-1">@lang('general.nav.belts')</a></li>
								  <li><a href="/fr/items/accessory/necklace/" tabindex="-1">@lang('general.nav.necklaces')</a></li>
								</ul>
							  </li>
							  <li class="dropdown-header">@lang('general.nav.skill')</li>
							  <li class="dropdown-submenu"><a href="/fr/items/skillbook/" tabindex="-1">@lang('general.nav.skillbook')</a>
								<ul class="dropdown-menu">
								  <li><a href="/fr/items/skillbook/fighter/" tabindex="-1">@lang('item.aion_class.fighter')</a></li>
								  <li><a href="/fr/items/skillbook/knight/" tabindex="-1">@lang('item.aion_class.knight')</a></li>
								  <li><a href="/fr/items/skillbook/chanter/" tabindex="-1">@lang('item.aion_class.chanter')</a></li>
								  <li><a href="/fr/items/skillbook/cleric/" tabindex="-1">@lang('item.aion_class.cleric')</a></li>
								  <li><a href="/fr/items/skillbook/ranger/" tabindex="-1">@lang('item.aion_class.ranger')</a></li>
								  <li><a href="/fr/items/skillbook/assassin/" tabindex="-1">@lang('item.aion_class.assassin')</a></li>
								  <li><a href="/fr/items/skillbook/wizzard/" tabindex="-1">@lang('item.aion_class.wizzard')</a></li>
								  <li><a href="/fr/items/skillbook/elementalist/" tabindex="-1">@lang('item.aion_class.elementalist')</a></li>
								</ul>
							  </li>
							  <li class="dropdown-submenu"><a href="/fr/items/stigma/" tabindex="-1">@lang('general.nav.stigma')</a>
								<ul class="dropdown-menu">
								  <li><a href="/fr/items/stigma/fighter/" tabindex="-1">@lang('item.aion_class.fighter')</a></li>
								  <li><a href="/fr/items/stigma/knight/" tabindex="-1">@lang('item.aion_class.knight')</a></li>
								  <li><a href="/fr/items/stigma/chanter/" tabindex="-1">@lang('item.aion_class.chanter')</a></li>
								  <li><a href="/fr/items/stigma/cleric/" tabindex="-1">@lang('item.aion_class.cleric')</a></li>
								  <li><a href="/fr/items/stigma/ranger/" tabindex="-1">@lang('item.aion_class.ranger')</a></li>
								  <li><a href="/fr/items/stigma/assassin/" tabindex="-1">@lang('item.aion_class.assassin')</a></li>
								  <li><a href="/fr/items/stigma/wizzard/" tabindex="-1">@lang('item.aion_class.wizzard')</a></li>
								  <li><a href="/fr/items/stigma/elementalist/" tabindex="-1">@lang('item.aion_class.elementalist')</a></li>
								</ul>
							  </li>
							  <li class="dropdown-header">@lang('general.nav.other')</li>
							</ul>
						  </li>
						</ul>
						<!-- Search Function -->
						{!! Form::open(['class' => 'navbar-form navbar-right', 'url' => Route('lang.items.search', ['lang' => 'fr']), 'method' => 'get']) !!}
						<div class="form-group">
							@if(isset($search))
								{!! Form::text('search_value', $search, ['placeholder' => Lang::get('general.search.search_ph'), 'class' => 'form-control']) !!}&nbsp;
							@else
								{!! Form::text('search_value', null, ['placeholder' => Lang::get('general.search.search_ph'), 'class' => 'form-control']) !!}&nbsp;
							@endif
							<input type="submit" class="btn" value=">" /> 
							{!! $errors->first('search_value', '<small class="help-block">'.lang::get('general.search.error_empty').'</small>') !!}
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div><!--/.navbar-collapse -->
		</div>