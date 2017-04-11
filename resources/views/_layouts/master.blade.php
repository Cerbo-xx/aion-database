<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Aion Database 2.7">
	<meta name="author" content="Sipherion">
	<link rel="icon" href="/theme/2.7/images/favicon.png">
	<title>Aion Database 2.7</title>
	<!-- Bootstrap core CSS -->
	<link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
	<!-- Custom styles for this template; Must be at end of head tag -->
	<link href="{!! asset('css/aion.css') !!}" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		@include('_modules.nav')
	</nav>

	<!-- Main jumbotron for a primary marketing message or call to action -->

	<div class="container" style="margin-top: 50px;">
		@yield('content')
	</div> <!-- /container -->

	<hr>

	<footer>
	<p>&copy; 2017 <a href="https://github.com/Sipherion">Sipherion</a>
	@if(Config::get('aion.contactMail') != '')
		&nbsp;(<a href="mailto: {{ Config::get('aion.contactMail') }}" >Contacter</a>)
	@endif
	<br/>Codage : Sipherion | Design : Sipherion | Data : NCSoft</p>
	</footer>
	
	<div class="coupontooltip"></div>


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="/js/jquery-2.2.4.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
		function getTip(id) {			
			$.ajax({
				type : 'GET',
				url : '/tip.php',
				data : 'item='+id,
				beforeSend : function() {
					$(".coupontooltip").html("Chargement...")
					$(".coupontooltip").css("display","block")
				},
				success : function(data) {
					$(".coupontooltip").html(data);
				}
			});
		}
		
		var tooltip = document.querySelectorAll('.coupontooltip');

		document.addEventListener('mousemove', fn, false);

		function fn(e) {
			for (var i=tooltip.length; i--;) {
				tooltip[i].style.left = e.pageX + 'px';
				tooltip[i].style.top = e.pageY - 200 + 'px';
			}
		}
		
		function hideDiv() {
			$(".coupontooltip").css("display","none")
		}
	</script>
</body>
</html>