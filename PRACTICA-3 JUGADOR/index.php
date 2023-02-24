<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

	<script>

		$(document).ready(function() {
			var n = 2;

	        $("#btnAdd").click(function(){

	        	//var newJugador = "Jugador " + (n++) + ": ";
	        	var newNumNomJuga = $('<div id="addNew"> <p> <B> Jugador '+ (n++) +':  <B> <input type="text" name="nuJ" size="1" style="text-align: center" placeholder="#"> <input type="text" name="noJ" style="text-align: center" placeholder="NOMBRE"> <button id="btnRem"> <B> - </B> </button> </p> </div>');
	        	$("#add").append(newNumNomJuga);

	        });

	        $(document).on('click', '#btnRem', function () {
	        	$(this).closest('#addNew').remove();
        	});

	    });

	 </script>

</head>

<body class="main">


	<div class = "panel-2" id = "e1"> <font size=5> <B>REGISTRO DE EQUIPOS<B> </font> </div>


	<div class="panel-0">

		<p> <B> EQUIPO FUTBOL </B> </p>
			<input type="text" name="eqF" style="text-align: center" placeholder="NOMBRE"> 
			 <br> <br>

	</div>

	<div id = "add" class="panel-1">

		<B> Jugador 1: </B>
			<input type="text" name="nuJ" style="text-align: center" size="1" placeholder="#">
			<input type="text" name="noJ" style="text-align: center" placeholder="NOMBRE" >
			<!-- font-weight: bold -->
			<button id="btnAdd"> <B> + </B> </button>

	</div>

</body>
</html>