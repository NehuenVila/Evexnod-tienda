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

<div class="container-fluid fondo">
	<div style="padding: 0px 170px 0px 170px" class="row">
		<div  class="col-sm-4">
			<div class="card" style="width:300px;">
				<img style="height: 200px; width: 200px; position: relative; left: 40px" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">Jhon Locke</h4>
					<div class="card-text">
						<span id="jugador1">asd</span>
						<span id="vida1">asd</span>
						<span id="ataque1">asd</span>
						<span id="critico1">asd</span>
						<span id="curacion1">asd</span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card" style="width:300px;">
				<img style="height: 200px; width: 200px;" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">John Wick</h4>
					<div class="card-text">
						<span id="jugador2">asd</span>
						<span id="vida2">asd</span>
						<span id="ataque2">asd</span>
						<span id="critico2">asd</span>
						<span id="curacion2">asd</span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card" style="width:300px;">
				<img style="height: 200px; width: 200px;" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">John Reese</h4>
					<div class="card-text">
						<span id="jugador3">asd</span>
						<span id="vida3">asd</span>
						<span id="ataque3">asd</span>
						<span id="critico3">asd</span>
						<span id="curacion3">asd</span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

	</div>
	<br>
	<div style="padding: 0px 170px 0px 170px" class="row">
		<div  class="col-sm-4">
			<div class="card" style="width:300px;">
				<img style="height: 200px; width: 200px;" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">Jhon Locke</h4>
					<div style="" class="card-text">
						<span id="jugador4"></span>
						<span id="vida4"></span>
						<span id="ataque4">de daño</span>
						<span id="critico4">asd</span>
						<span id="curacion4">asd</span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card" style="width:300px;">
				<img style="height: 200px; width: 200px;" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">John Wick</h4>
					<div class="card-text">
						<span id="jugador5">asd</span>
						<span id="vida5">asd</span>
						<span id="ataque5">asd</span>
						<span id="critico5">asd</span>
						<span id="curacion5">asd</span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card" style="width:300px;">
				<img style="height: 200px; width: 200px;" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">John Reese</h4>
					<div class="card-text">
						<span>nombre: </span><span id="jugador6"></span>
						<span id="vida6"></span>
						<span id="ataque6"></span>
						<span id="critico6">asd</span>
						<span id="curacion6">asd</span>
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
	<div class="degradadoborde"style="height: 100px; width: 100%; background-color: rgba(75,75,75,0.2); float: left;color:lime" id="ganador"></div>
	<div class="mx-auto">
		<button style="height: 34px;margin-bottom: 10px" onclick="inicio_combate_automatico3()"type="button" class="btn btn-evexnod-outline">Combate automático</button>
		<button style="height: 34px;margin-bottom: 10px" onclick="pausar()"type="button" class="btn btn-evexnod-outline">Pausar</button>
		<button style="height: 34px;margin-bottom: 10px" onclick="ataque3()"type="button" class="btn btn-evexnod-outline">Siguiente turno</button>

	</div>
	
</div>



