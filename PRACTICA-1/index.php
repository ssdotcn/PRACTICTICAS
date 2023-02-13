<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

	<script>
		function myFunction() {
			var x,y,re,text,tipo;
			x = document.getElementById("num1").value;
			y = document.getElementById("num2").value;
			tipo = document.getElementById("op").value;
			//|| x.matches("[0-9]*") || y.matches("[0-9]*")

			if (x == "" || y == "" ) {
				re = "es necesario introducir dos numeros";
			} else {
				if (tipo == "so") {
					re = "es necesario selecionar una opcion";
				} else {
					if(tipo == "s"){
						re = parseFloat(x)+parseFloat(y);
					}
					if(tipo == "r"){
						re = parseFloat(x)-parseFloat(y);
					}
					if(tipo == "m"){
						re = parseFloat(x)*parseFloat(y);
					}
					if(tipo == "d"){
						re =parseFloat(x)/parseFloat(y);
					}
				}
			}
			document.getElementById("re").innerHTML = re;
		}
	 </script>

</head>
<body class = "main">
	<div class = "panel-1" id = "e1"> <font size=5> <B>BIENVENIDO<B> </font> </div>


	<div class = "panel-1" id = "e2">
	<label for="num1"> <font size=4> numero 1: </font> </label>
	<input type="text" size="1" id="num1" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
	<label for="num2"> <font size=4> numero 2: </font> </label>
	<input type="text" size="1" id="num2" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
	</div>

	<div class = "panel-1" id = "e3">	
	<label for="op"> <font size=4> operacion: </font> </label>
	<select name="op" id="op">
		<option value="so">seleciona una opcion</option>
		<option value="s">suma</option>
		<option value="r">resta</option>
		<option value="m">multiplicacion</option>
		<option value="d">division</option>
	</select>
	<button id="btn" onclick="myFunction()"><B>ejecutar</B></button>
	</div>

	<div class = "panel-2" id = "e4">
	<label for="re"> <font size=4> resultado: </font><label id="re" style="font-size: 18px"></label> </label>
	</div>

</body>
</html>