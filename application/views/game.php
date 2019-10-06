<style>
	.fondo{
		background-image: url('<?php echo base_url()?>assets/img/ruines3.png');
		background-repeat: no-repeat;
		background-size: cover;
	}
	.jugador{
		width: 100px;
		height: 200px;
		background-color: lightgrey;
		color:white;
	}
	.vidaJ1{
		width: 100px;
		height: 100%;
		background-color: rgba(0,0,0,0.7);
		position: absolute;
	}

	.vidaJ2{
		width: 100px;
		height: 100%;
		background-color: rgba(0,0,0,0.7);
		position: absolute;
	}

</style>

<br>

<h1 class="text-center">Java Script Game</h1>
<br>
<h4 class="text-center">Personaliza a tu guerrero</h4>

<div class="row">
	<div class="col-sm-4">
		<select class="custom-select">
		  <option selected>Open this select menu</option>
		  <option value="1">One</option>
		  <option value="2">Two</option>
		  <option value="3">Three</option>
		</select>
	</div>
	<div class="col-sm-4">
		<select class="custom-select">
		  <option selected>Open this select menu</option>
		  <option value="1">One</option>
		  <option value="2">Two</option>
		  <option value="3">Three</option>
		</select>
		<p id="puntosDisponibles"></p>
		<button type="button" id="sumarVida" onclick="mejorar_personaje('vida', 20)" class="btn btn-success">+vida</button>
		<button type="button" id="sumarDaño" onclick="mejorar_personaje('daño', 5)" class="btn btn-success">+daño</button>
		<button type="button" id="sumarCritico" onclick="mejorar_personaje('critico', 1)" class="btn btn-success">+critico</button>
	</div>
	<div class="col-sm-4">
		<select class="custom-select">
		  <option selected>Open this select menu</option>
		  <option value="1">One</option>
		  <option value="2">Two</option>
		  <option value="3">Three</option>
		</select>
	</div>
</div>
<br>
<div class="container-fluid fondo">
	<div style="padding: 0px 170px 0px 170px" class="row">
		<div  class="col-sm-4">
			<div class="card text-center" style="width:300px;">
				<img style="height: 200px; width: 200px; position: relative; left: 60px" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">Jhon Locke</h4>
					<div class="card-text">
						<span id="jugador1"></span>
						<span style="float left">vida: </span><span id="vida1"></span>
						<span style="float left">daño: </span><span id="ataque1"></span>
						<br>
						<span style="float right">critico: </span><span id="critico1"></span>
						<span style="float right">posiones: </span><span id="curacion1"></span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card text-center" style="width:300px;">
				<img style="height: 200px; width: 200px; position: relative; left: 60px" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">John Wick</h4>
					<div class="card-text">
						<span id="jugador2"></span>
						<span style="float left">vida: </span><span id="vida2"></span>
						<span style="float left">daño: </span><span id="ataque2"></span>
						<br>
						<span style="float right">critico: </span><span id="critico2"></span>
						<span style="float right">posiones: </span><span id="curacion2"></span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card text-center" style="width:300px;">
				<img style="height: 200px; width: 200px; position: relative; left: 60px" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">John Reese</h4>
					<div class="card-text">
						<span id="jugador3"></span>
						<span style="float left">vida: </span><span id="vida3"></span>
						<span style="float left">daño: </span><span id="ataque3"></span>
						<br>
						<span style="float right">critico: </span><span id="critico3"></span>
						<span style="float right">posiones: </span><span id="curacion3"></span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

	</div>
	<br>
	<div style="padding: 0px 170px 0px 170px" class="row">
		<div  class="col-sm-4">
			<div class="card text-center" style="width:300px;">
				<img style="height: 200px; width: 200px; position: relative; left: 60px" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">Jhon Locke</h4>
					<div style="" class="card-text">
						<span id="jugador4"></span>
						<span style="float left">vida: </span><span id="vida4"></span>
						<span style="float left">daño: </span><span id="ataque4"></span>
						<br>
						<span style="float right">critico: </span><span id="critico4"></span>
						<span style="float right">posiones: </span><span id="curacion4"></span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card text-center" style="width:300px;">
				<img style="height: 200px; width: 200px; position: relative; left: 60px" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">John Wick</h4>
					<div class="card-text">
						<span id="jugador5"></span>
						<span style="float left">vida: </span><span id="vida5"></span>
						<span style="float left">daño: </span><span id="ataque5"></span>
						<br>
						<span style="float right">critico: </span><span id="critico5"></span>
						<span style="float right">posiones: </span><span id="curacion5"></span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card text-center" style="width:300px;">
				<img style="height: 200px; width: 200px; position: relative; left: 60px" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">John Reese</h4>
					<div class="card-text">
						<span id="jugador6"></span>
						<span style="float left">vida: </span><span id="vida6"></span>
						<span style="float left">daño: </span><span id="ataque6"></span>
						<br>
						<span style="float right">critico: </span><span id="critico6"></span>
						<span style="float right">posiones: </span><span id="curacion6"></span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

	</div>
</div>


<!-- <div class="row" style="height: 200px;padding: 15px;">
	<div class="col-sm-4">
		<div class="text-center"style="border: 3px solid darkred;border-right: 0px;height: 100%; width: 50%;background-color: rgba(75,75,75,0.2);float:left;color:lightgrey">
			<p id="jugador4"></p>
			<p id="vida4"></p>
			<p id="ataque4"></p>
			<p id="critico4"></p>
			<p id="curacion4"></p>
		</div>
		<div class="bg-arezlon2"style="height: 100%; width: 50%;float:right;padding: 20px;border: 3px solid darkred;border-left: 0px;">
			<div id="enemigo1"style="background-color: rgba(75,75,75,0.5);width: 100%;height: 100%"></div>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="text-center"style="border: 3px solid darkred;border-right: 0px;height: 100%; width: 50%;background-color: rgba(75,75,75,0.2);float:left;color:lightgrey">
			<p id="jugador5"></p>
			<p id="vida5"></p>
			<p id="ataque5"></p>
			<p id="critico5"></p>
			<p id="curacion5"></p>
		</div>
		<div class="bg-arezlon2"style="height: 100%; width: 50%;float:right;padding: 20px;border: 3px solid darkred;border-left: 0px;">
			<div id="enemigo2"style="background-color: rgba(75,75,75,0.5);width: 100%;height: 100%"></div>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="text-center"style="border: 3px solid darkred;border-right: 0px;height: 100%; width: 50%;background-color: rgba(75,75,75,0.2);float:left;color:lightgrey">
			<p id="jugador6"></p>
			<p id="vida6"></p>
			<p id="ataque6"></p>
			<p id="critico6"></p>
			<p id="curacion6"></p>
		</div>
		<div class="bg-arezlon2"style="height: 100%; width: 50%;float:right;padding: 20px;border: 3px solid darkred;border-left: 0px;">
			<div id="enemigo3"style="background-color: rgba(75,75,75,0.5);width: 100%;height: 100%"></div>
		</div>
	</div>
</div> -->

<div class="row"style="height: 200px;padding: 30px; width: 50%; position: relative;left: 350px;">
	<div class="degradadoborde"style="height: 100px; width: 100%; background-color: rgba(75,75,75,0.2); float: left;color:red" id="ganador"></div>
	<div class="mx-auto">
		<button style="height: 34px;margin-bottom: 10px" onclick="inicio_combate_automatico3()"type="button" class="btn btn-evexnod-outline">Combate automático</button>
		<button style="height: 34px;margin-bottom: 10px" onclick="pausar()"type="button" class="btn btn-evexnod-outline">Pausar</button>
		<button style="height: 34px;margin-bottom: 10px" onclick="ataque3()"type="button" class="btn btn-evexnod-outline">Siguiente turno</button>

	</div>
	
</div>



