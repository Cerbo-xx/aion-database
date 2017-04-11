@extends('_layouts.master')

@section('content')
<div class="row">
	<div id="welcomeDiv" class="col-md-12">
		<img src="img/logo.png" alt="{{ Config::get('aion.website_name') }} logo">
		<h3>@lang('general.welcome.title', ['version' => '2.7', 'siteName' => Config::get('aion.website_name')])</h3>
		<!-- Your content bellow this comment -->
		<p>
		</p>
	</div>
</div>
@endsection