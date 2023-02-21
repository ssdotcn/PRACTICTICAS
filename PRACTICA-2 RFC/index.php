<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

	<script>
		$(document).ready(function() {

			$('#rfc').hide();

			$('#datRes').hide();
			$('#datError').hide();

			$('#rfcError').hide();

	        $('#btn').click(function(){

	        	var cad;

        		cad = $('#apP').val().substring(0,2);
        		cad += $('#apM').val().substring(0,1);
        		cad += $('#nom').val().substring(0,1);
        		cad += $('#fecN').val().substring(2,4);
        		cad += $('#fecN').val().substring(5,7);
        		cad += $('#fecN').val().substring(8,10);
        		cad += "R7A";


        		if (cad.length <= 12 ) {
        			$('#rfc').hide();
        			$('#rfcError').show();
	        	} else {
	        		$('#rfcError').hide();
	        		$('#rfc').show();
		    		$('#rfcRes').show();
	        	}

	        	document.getElementById("rfc").innerHTML = cad;
	        	$('#rfc').val(cad.toUpperCase());

	        } );

	        $('#btnA').click(function(){

	        	var id = document.getElementById("idA").value;

	        	if (id == "") {
	        		$('#datRes').hide();
	        		$('#datError').show();

	        	} else {

	        		$('#datError').hide();

	        		$.ajax ({
			        	url: "https://jsonplaceholder.typicode.com/users/" + $('#idA').val(),
			        	method: "GET",
			        	success: function(data) {
			        		$('#add1').hide();
			        		$('#nomA').val(data.name);
			        		$('#corA').val(data.email);
			        		$('#phoA').val(data.phone);
			        		$('#datRes').show();
			        	}

		        	} );

	        	}

	        } );

	    } );

	 </script>

</head>
<body class = "main">
	<div class = "panel-0" id = "e1"> <font size=5> <B>BIENVENIDO<B> </font> </div>


	<div class = "panel-1">
		<label for="nom"> <font size=4> Nombre: </font> </label>
		<input type="text" size="30" id="nom" onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97  && event.charCode <= 122'><br>

		<label for="apP"> <font size=4> Apellido Paterno: </font> </label>
		<input type="text" size="30" id="apP" onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97  && event.charCode <= 122'><br>

		<label for="apM"> <font size=4> Apellido Materno: </font> </label>
		<input type="text" size="30" id="apM" onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97  && event.charCode <= 122'><br>

		<label for="fecN"> <font size=4> Fecha de Nacimiento: </font> </label>
		<input type="date" size="30" id="fecN"><br>

		<button id="btn"><B> GENERAR RFC</B></button>
	</div>

	<div class = "panel-2">

		<label > <font size=4> RFC </font> </label>

		<div id="rfcRes">
			<input type="text" id="rfc" size="15" style="text-align: center">
		</div>

		<div id="rfcError">
			<label > <font size=4 color="red"> DEBE LLENAR TODOS LOS CAMPOS </font> </label>
		</div>
	</div>

	<div class = "panel-1">

		<label for="idA"> <font size=4> ID: </font> </label>
		<input type="text" size="1" id="idA" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
		<button id="btnA"><B> CONSULTAR </B></button><br>

	</div>

	<div class = "panel-2">

		<label > <font size=4> DATOS DE USUARIO </font> </label>

		<div id = "datRes">

			<label for="nomA" id="nomAA"> <font size=4> Nombre: </font> </label>
			<input type="text" size="30" id="nomA"><br>

			<label for="corA" id="corAA"> <font size=4> Email: </font> </label>
			<input type="text" size="30" id="corA"><br>

			<label for="phoA" id="phoAA"> <font size=4> Phone: </font> </label>
			<input type="text" size="30" id="phoA"><br>

		</div>

		<div id="datError">
			<label > <font size=4 color="red"> DEBE INGRESAR EL ID </font> </label>
		</div>

	<div>

</body>
</html>