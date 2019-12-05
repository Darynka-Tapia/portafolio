

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body background="ejercicio6IMG/Camino2.png">
	<div class="container">

		<div class="row" style="">
			<div class="col-8 mt-3 pt-3 cajas">
				<div class="row">
					<div class="col-6">
						<button type="button" class="btn btn-primary" onclick="obtener('encender')">Encender</button>
						<button type="button" class="btn btn-danger" onclick="obtener('apagar')">Apagar</button>
						<div class="form-group">
							<label for="formControlRange">Km a recorrer</label>
							<input type="range" class="form-control-range" id="formControlRange" value="0" onclick="obtener('usar')">
						</div>
					</div>
					<div class="col-6">
						<label for="">Agregar Gasolina (Lts.)</label>
						<input type="number" min="0" max="100" value="" id="litros" onKeyUp="obtener('llenar')">
						<button class="btn btn-info" onclick="obtener('estado')">Ver estado del auto</button>
					</div>
				</div>
				
				
			</div>
			<div class="col-4 mt-3 cajas" style=" width:auto; height:200px; overflow: scroll;">
				<b>Mensaje	<br></b>
				<div class="resultado" id="resultado"> </div> 
				<div class="funciones" id="funciones">  <br></div> 
			</div>

		</div>
	</div>


	<script>


		function obtener(funcion){
			var kilometros=document.getElementById("formControlRange").value;
			var litros=document.getElementById("litros").value;
			


			var parametros = {
				"funcion" : funcion,
				"km" :kilometros, 
				"lt": litros

			};

			$.ajax({
	            data:  parametros, //datos que se envian a traves de ajax
	            url:   'classauto.php', //archivo que recibe la peticion
	            type:  'post', //método de envio
	            beforeSend: function () {
	            	$("#resultado").html("Procesando, espere por favor...");
	            },
	            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
	            	$("#resultado").html(response);
	            }
	        });
		}
		


	</script>
	
	<style>
		.cajas{
			border: 2px solid #000;
		}
	</style>
</body>
</html>