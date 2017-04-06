		<div class="container">
			<div class="navbar-header">
				@if(Config::get('aion.enable_2_7') == true)
					<a class="navbar-brand" href="/">Aion Database 2.7</a>
				@elseif(Config::get('aion.enable_3_9') == true)
					<a class="navbar-brand" href="/">Aion Database 3.9</a>
				@else
					<a class="navbar-brand" href="/">Aion Database</a>
				@endif
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<div class="collapse navbar-collapse" id="collapsable-menu">
					<div class="collapse navbar-collapse bs-example-js-navbar-collapse">
						<ul class="nav navbar-nav">
						  <li class="dropdown"> <a href="#" data-toggle="dropdown">Objets <b class="caret"></b></a>
							<ul class="dropdown-menu">
							  <li class="dropdown-header">Equipement</li>
							  <li><a href="#" tabindex="-1">Ensembles d'objets</a></li>
							  <li class="dropdown-submenu"><a href="/items/weapon/" tabindex="-1">Armes</a>
								<ul class="dropdown-menu">
								  <li class="dropdown-header">Armes à une main</li>
								  <li><a href="/items/weapon/sword/" tabindex="-1">Epées</a></li>
								  <li><a href="/items/weapon/mace/" tabindex="-1">Masses</a></li>
								  <li><a href="/items/weapon/dagger/" tabindex="-1">Dagues</a></li>
								  <li class="dropdown-header">Armes à deux mains</li>
								  <li><a href="/items/weapon/2h_sword/" tabindex="-1">Espadons</a></li>
								  <li><a href="/items/weapon/polearm/" tabindex="-1">Guisarmes</a></li>
								  <li><a href="/items/weapon/staff/" tabindex="-1">Bâtons</a></li>
								  <li class="dropdown-header">Armes à distance</li>
								  <li><a href="/items/weapon/bow/" tabindex="-1">Arcs</a></li>
								  <li><a href="/items/weapon/orb/" tabindex="-1">Orbes</a></li>
								  <li><a href="/items/weapon/book/" tabindex="-1">Grimoires</a></li>
								</ul>
							  </li>
							  <li class="dropdown-submenu"><a href="/items/armor/" tabindex="-1">Armures</a>
								<ul class="dropdown-menu">
								  <li class="dropdown-submenu"><a href="/items/armor/robe/" tabindex="-1">Tissu</a>
									<ul class="dropdown-menu">
									  <li><a href="/items/armor/robe/torso/" tabindex="-1">Vestes</a></li>
									  <li><a href="/items/armor/robe/glove/" tabindex="-1">Gants</a></li>
									  <li><a href="/items/armor/robe/shoulder/" tabindex="-1">Spallières</a></li>
									  <li><a href="/items/armor/robe/leg/" tabindex="-1">Jambières</a></li>
									  <li><a href="/items/armor/robe/foot/" tabindex="-1">Chaussures</a></li>
									</ul>
								  </li>
								  <li class="dropdown-submenu"><a href="/items/armor/leather/" tabindex="-1">Cuir</a>
									<ul class="dropdown-menu">
									  <li><a href="/items/armor/leather/torso/" tabindex="-1">Vestes</a></li>
									  <li><a href="/items/armor/leather/glove/" tabindex="-1">Gants</a></li>
									  <li><a href="/items/armor/leather/shoulder/" tabindex="-1">Spallières</a></li>
									  <li><a href="/items/armor/leather/leg/" tabindex="-1">Jambières</a></li>
									  <li><a href="/items/armor/leather/foot/" tabindex="-1">Chaussures</a></li>
									</ul>
								  </li>
								  <li class="dropdown-submenu"><a href="/items/armor/chain/" tabindex="-1">Mailles</a>
									<ul class="dropdown-menu">
									  <li><a href="/items/armor/chain/torso/" tabindex="-1">Vestes</a></li>
									  <li><a href="/items/armor/chain/glove/" tabindex="-1">Gants</a></li>
									  <li><a href="/items/armor/chain/shoulder/" tabindex="-1">Spallières</a></li>
									  <li><a href="/items/armor/chain/leg/" tabindex="-1">Jambières</a></li>
									  <li><a href="/items/armor/chain/foot/" tabindex="-1">Chaussures</a></li>
									</ul>
								  </li>
								  <li class="dropdown-submenu"><a href="/items/armor/plate/" tabindex="-1">Plaques</a>
									<ul class="dropdown-menu">
									  <li><a href="/items/armor/plate/torso/" tabindex="-1">Vestes</a></li>
									  <li><a href="/items/armor/plate/glove/" tabindex="-1">Gants</a></li>
									  <li><a href="/items/armor/plate/shoulder/" tabindex="-1">Spallières</a></li>
									  <li><a href="/items/armor/plate/leg/" tabindex="-1">Jambières</a></li>
									  <li><a href="/items/armor/plate/foot/" tabindex="-1">Chaussures</a></li>
									</ul>
								  </li>
								  <!--
								  <li class="dropdown-submenu"><a href="/items/armor/no_armor/" tabindex="-1">Vêtements</a>
									<ul class="dropdown-menu">
									  <li><a href="/items/armor/no_armor/torso/" tabindex="-1">Vestes</a></li>
									  <li><a href="/items/armor/no_armor/glove/" tabindex="-1">Gants</a></li>
									  <li><a href="/items/armor/no_armor/shoulder/" tabindex="-1">Spallières</a></li>
									  <li><a href="/items/armor/no_armor/leg/" tabindex="-1">Jambières</a></li>
									  <li><a href="/items/armor/no_armor/foot/" tabindex="-1">Chaussures</a></li>
									</ul>
								  </li>
								  -->
								  <li><a href="/items/armor/no_armor/head/" tabindex="-1">Tête</a></li>
								  <li><a href="/items/armor/no_armor/shield/" tabindex="-1">Boucliers</a></li>
								</ul>
							  </li>
							  <li class="dropdown-submenu"><a href="/items/accessory/" tabindex="-1">Accessoires</a>
								<ul class="dropdown-menu">
								  <li><a href="/items/accessory/wing/" tabindex="-1">Ailes</a></li>
								  <li><a href="/items/accessory/ring/" tabindex="-1">Anneaux</a></li>
								  <li><a href="/items/accessory/earring/" tabindex="-1">Boucles d'oreilles</a></li>
								  <li><a href="/items/accessory/belt/" tabindex="-1">Ceintures</a></li>
								  <li><a href="/items/accessory/necklace/" tabindex="-1">Colliers</a></li>
								</ul>
							  </li>
							  <li class="dropdown-header">Compétences</li>
							  <li class="dropdown-submenu"><a href="/items/skillbook/" tabindex="-1">Grimoires</a>
								<ul class="dropdown-menu">
								  <li><a href="/items/skillbook/fighter/" tabindex="-1">Gladiateur</a></li>
								  <li><a href="/items/skillbook/knight/" tabindex="-1">Templier</a></li>
								  <li><a href="/items/skillbook/chanter/" tabindex="-1">Aède</a></li>
								  <li><a href="/items/skillbook/cleric/" tabindex="-1">Clerc</a></li>
								  <li><a href="/items/skillbook/ranger/" tabindex="-1">Rôdeur</a></li>
								  <li><a href="/items/skillbook/assassin/" tabindex="-1">Assassin</a></li>
								  <li><a href="/items/skillbook/wizzard/" tabindex="-1">Sorcier</a></li>
								  <li><a href="/items/skillbook/elementalist/" tabindex="-1">Spiritualiste</a></li>
								</ul>
							  </li>
							  <li class="dropdown-submenu"><a href="/items/stigma/" tabindex="-1">Stigma</a>
								<ul class="dropdown-menu">
								  <li><a href="/items/stigma/fighter/" tabindex="-1">Gladiateur</a></li>
								  <li><a href="/items/stigma/knight/" tabindex="-1">Templier</a></li>
								  <li><a href="/items/stigma/chanter/" tabindex="-1">Aède</a></li>
								  <li><a href="/items/stigma/cleric/" tabindex="-1">Clerc</a></li>
								  <li><a href="/items/stigma/ranger/" tabindex="-1">Rôdeur</a></li>
								  <li><a href="/items/stigma/assassin/" tabindex="-1">Assassin</a></li>
								  <li><a href="/items/stigma/wizzard/" tabindex="-1">Sorcier</a></li>
								  <li><a href="/items/stigma/elementalist/" tabindex="-1">Spiritualiste</a></li>
								</ul>
							  </li>
							  <li class="dropdown-header">Autre</li>
							</ul>
						  </li>
						</ul>
						<!-- Search Function -->
						{!! Form::open(['class' => 'navbar-form navbar-right', 'url' => Route('items.search'), 'method' => 'get']) !!}
						<div class="form-group">
							@if(isset($search))
								{!! Form::text('search_value', $search, ['placeholder' => "Chercher...", 'class' => 'form-control']) !!}&nbsp;
							@else
								{!! Form::text('search_value', null, ['placeholder' => "Chercher...", 'class' => 'form-control']) !!}&nbsp;
							@endif
							<input type="submit" class="btn" value=">" />
							{!! $errors->first('search_value', '<small class="help-block">Le champ de recherche ne peut être vide</small>') !!}
						</div>
						{!! Form::close() !!}
					</div>
				</div>
				<!--
				<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" placeholder="Email" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" placeholder="Password" class="form-control">
					</div>
					<button type="submit" class="btn btn-success">Sign in</button>
				</form>
				-->
			</div><!--/.navbar-collapse -->
		</div>