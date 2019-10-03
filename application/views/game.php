<style>
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

<h3 style="float:left;font-size: 20px"class="font-arez">aaaaaaaaaa:</h3> <button style="float:right"type="button" class="btn btn-evexnod-outline btn-sm">aaaaa</button>
<br>
<div style="margin-top:15px"class="line"></div>



<!-- <div class="row"style="background-color: transparent;padding: 15px;height: 700px">
</div> -->

<!-- <div class="jugador text-center"style="float: left; margin-right: 40px">
	<div class="vidaJ1">
		
		<br><br>
		<button style="margin-bottom: 10px" onclick="sacar_vida(actor_pricipal, actor_secundario, 1)"type="button" class="boton1 btn btn-danger">Atacar</button>
		<button onclick="curarse(actor_pricipal, 1)"type="button" class="boton1 btn btn-danger">Curarse</button>
	</div>
</div>

<div class="jugador text-center"style="float: left; margin-right: 40px">
	<div class="vidaJ2">
		<p id="jugador2"></p>
		<p id="vida2"></p>
		<p id="ataque2"></p>
		<p id="critico2"></p>
		<p id="curacion2"></p>
		<br><br>
		<button style="margin-bottom: 10px" onclick="sacar_vida(actor_secundario, actor_pricipal, 0)"type="button" class="boton2 btn btn-danger">Atacar</button>
		<button onclick="curarse(actor_secundario, 0)"type="button" class="boton2 btn btn-danger">Curarse</button>
	</div>
</div> -->

<div style="padding: 0px 170px 0px 170px" class="row">
	<div  class="col-sm-4">
		<div class="card" style="width:300px;">
			<img style="height: 200px; width: 200px;" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
			<div class="card-body">
				<h4 class="card-title">Jhon Locke</h4>
				<div class="card-text">
					<p id="jugador1">asd</p>
					<p id="vida1">asd</p>
					<p id="ataque1">asd</p>
					<p id="critico1">asd</p>
					<p id="curacion1">asd</p>
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
					<p id="jugador2">asd</p>
					<p id="vida2">asd</p>
					<p id="ataque2">asd</p>
					<p id="critico2">asd</p>
					<p id="curacion2">asd</p>
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
					<p id="jugador3">asd</p>
					<p id="vida3">asd</p>
					<p id="ataque3">asd</p>
					<p id="critico3">asd</p>
					<p id="curacion3">asd</p>
				</div>    
				<!-- <a href="#" class="btn btn-primary"></a> -->
			</div>
		</div>
	</div>

</div>

<!-- <div class="row" style="height: 200px;padding: 15px;">
	<div class="col-sm-4">
		<div class="text-center"style="border: 3px solid green;border-right: 0px;height: 100%; width: 50%;background-color: rgba(75,75,75,0.2);float:left;color:lightgrey">
			<p id="jugador1"></p>
			<p id="vida1"></p>
			<p id="ataque1"></p>
			<p id="critico1"></p>
			<p id="curacion1"></p>
		</div>
		<div class="bg-arezlon2"style="height: 100%; width: 50%;float:right;padding: 20px;border: 3px solid green;border-left: 0px;">
			<div id="jugadorUno"style="background-color: rgba(75,75,75,0.5);width: 100%;height: 100%"></div>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="text-center"style="border: 3px solid green;border-right: 0px;height: 100%; width: 50%;background-color: rgba(75,75,75,0.2);float:left;color:lightgrey">
			<p id="jugador2"></p>
			<p id="vida2"></p>
			<p id="ataque2"></p>
			<p id="critico2"></p>
			<p id="curacion2"></p>
		</div>
		<div class="bg-arezlon2"style="height: 100%; width: 50%;float:right;padding: 20px;border: 3px solid green;border-left: 0px;">
			<div id="jugadorDos"style="background-color: rgba(75,75,75,0.5);width: 100%;height: 100%"></div>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="text-center"style="border: 3px solid green;border-right: 0px;height: 100%; width: 50%;background-color: rgba(75,75,75,0.2);float:left;color:lightgrey">
			<p id="jugador3"></p>
			<p id="vida3"></p>
			<p id="ataque3"></p>
			<p id="critico3"></p>
			<p id="curacion3"></p>
		</div>
		<div class="bg-arezlon2"style="height: 100%; width: 50%;float:right;padding: 20px;border: 3px solid green;border-left: 0px;">
			<div id="jugadorTres"style="background-color: rgba(75,75,75,0.5);width: 100%;height: 100%"></div>
		</div>
	</div>
</div> -->



<div class="row" style="height: 200px;padding: 15px;">
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
</div>

<div class="row"style="height: 200px;padding: 30px;">
	<div class="degradadoborde"style="height: 100px; width: 100%; background-color: rgba(75,75,75,0.2); float: left;color:lime" id="ganador"></div>
	<div class="mx-auto">
		<button style="height: 34px;margin-bottom: 10px" onclick="inicio_combate_automatico3()"type="button" class="btn btn-evexnod-outline">Combate automático</button>
		<button style="height: 34px;margin-bottom: 10px" onclick="pausar()"type="button" class="btn btn-evexnod-outline">Pausar</button>
		<button style="height: 34px;margin-bottom: 10px" onclick="ataque3()"type="button" class="btn btn-evexnod-outline">Siguiente turno</button>

	</div>
	
</div>



