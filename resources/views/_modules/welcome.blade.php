@extends('_layouts.master')

@section('content')
<div class="row">
	<div id="welcomeDiv" class="col-md-12">
		<img src="img/logo.png" alt="Chanology Aion">
		<h3>@lang('general.welcome.title', ['version' => '2.7', 'siteName' => Config::get('aion.website_name')])</h3>
		<h4>Il s'agit d'une Database pour Aion qui ne contient que des objets de la version 2.7 issus du client Gameforge 2.7.0.2</h4>
		<p>Cette base de données est en construction constante, n'hésitez pas à nous faire vos suggestions
		directement sur le forum.<br/>Merci à tous ceux qui participent au projet !</p>
		<hr/>
		<p>Cette database est réalisée par des passionés qui ont malheureusement un travail à côté ; il est donc
		possible que les mises à jour (incluant correction de bug de la database elle-même ou ajout / suppression /
		modification de contenu) sur cette database prennent du temps. Vous pouvez bien évidemment participer
		à son élaboration, dans ce cas veuillez contacter Thane sur le forum de Chanology.</p>
	</div>
</div>
@endsection