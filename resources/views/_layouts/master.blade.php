<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Aion Database 2.7">
	<meta name="author" content="Thane">
	<link rel="icon" href="/theme/img/favicon.png">
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
	<p>&copy; 2016-2017 <a href="http://forum.aion-chanology.net/">Aion Chanology</a><br/>
	Codage : Thane | Design : Thane | Data : Thane | Vaisselle et caf&eacute; : Thane</p>
	</footer>
	
	<div class="coupontooltip"></div>


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="/js/jquery-2.2.4.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	
	<script src="/js/jquery.dataTables.min.js"></script>
	<script src="/js/dataTables.bootstrap.min.js"></script>
	
	<script type="text/javascript">
		/*
		$(function() {
			$('.tip').mouseover(function(){
				$(this).after('<p>Boo</p>');
				

			});
		})
		
		$(document).ready(function() {
			$('#dataSource').DataTable( {
				"paging":   false,
				"searching": false,
				"language": {
					"lengthMenu": "Afficher _MENU_ éléments",
					"zeroRecords": "Aucun élément à afficher",
					"info": "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments (filtré de _MAX_ éléments au total)",
					"infoEmpty": "No records available",
					"infoFiltered": " ",
					"thousands": ".",
					"search": "Rechercher :",
					"processing": "Chargement...",
					"paginate": {
						"first":      "Première",
						"last":       "Dernière",
						"next":       "Suivant",
						"previous":   "Précédent"
					},
					"aria": {
						"sortAscending":  ": activate to sort column ascending",
						"sortDescending": ": activate to sort column descending"
					},
				},
				"columnDefs": [
					{"targets": [ 0 ],"visible": false,"searchable": true},
					{ "width": "80px", "targets": 1 },
					{ "width": "40px", "targets": 2 },
					{ "width": "40px", "targets": 4 },
					{ "width": "40px", "targets": 5 }
				],
				"order": [[ 0, 'desc' ], [4, 'desc'], [3, 'asc']],
			} );
		} );
		*/
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