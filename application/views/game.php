<style>
	.fondo{
		background-image: url('<?php echo base_url().'assets/img/'.rand(1, 6).'.jpg'?>');
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
<div style="width: 100%" class="text-center">
<button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#puntajes">Puntajes Altos</button>	
</div>
<h4 class="text-center">Personaliza a tus guerreros</h4>

<div class="row">
	<div class="col-sm-4">
	<!-- <select id="actor1" class="custom-select">
		  <option selected>Seleccione la clase</option>
		  <option value="caballero">Caballero</option>
		  <option value="ginete">Ginete</option>
		  <option value="gladiador">Gladiador</option>
		</select> -->
	</div>
	<div class="col-sm-4 text-center">
		<!-- <select id="actor2" class="custom-select">
		  <option selected>Seleccione la clase</option>
		  <option value="caballero">Caballero</option>
		  <option value="ginete">Ginete</option>
		  <option value="gladiador">Gladiador</option>
		</select> -->
		<div style="width: 100%" class="text-center">
			<button id="btn-clases" type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#clases">Selecciona la clase de tus guerreros</button>	
		</div>
		<p id="puntosDisponibles"></p>
		<button type="button" id="sumarVida" onclick="mejorar_personaje('vida', 20)" class="btn btn-success">+vida</button>
		<button type="button" id="sumarDaño" onclick="mejorar_personaje('daño', 5)" class="btn btn-success">+daño</button>
		<button type="button" id="sumarCritico" onclick="mejorar_personaje('critico', 1)" class="btn btn-success">+critico</button>
	</div>
	<div class="col-sm-4">
		<!-- <select id="actor3" class="custom-select">
		  <option selected>Seleccione la clase</option>
		  <option value="caballero">Caballero</option>
		  <option value="ginete">Ginete</option>
		  <option value="gladiador">Gladiador</option>
		</select> -->
	</div>
</div>
<br>
<div class="container-fluid fondo">
	<div style="padding: 0px 170px 0px 170px" class="row">
		<div  class="col-sm-4">
			<div class="card text-center" style="width:300px;">
				<img id="img1" style="height: 200px; width: 200px; position: relative; left: 60px" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">Jhon Locke</h4>
					<div class="card-text">
						<span id="jugador1"></span>
						<span style="float left">vida: </span><span id="vida1"></span>
						<span style="float left">daño: </span><span id="ataque1"></span>
						<br>
						<span style="float right">critico: </span><span id="critico1"></span>
						<span style="float right">pociones: </span><span id="curacion1"></span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card text-center" style="width:300px;">
				<img id="img2" style="height: 200px; width: 200px; position: relative; left: 60px" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">John Wick</h4>
					<div class="card-text">
						<span id="jugador2"></span>
						<span style="float left">vida: </span><span id="vida2"></span>
						<span style="float left">daño: </span><span id="ataque2"></span>
						<br>
						<span style="float right">critico: </span><span id="critico2"></span>
						<span style="float right">pociones: </span><span id="curacion2"></span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card text-center" style="width:300px;">
				<img id="img3" style="height: 200px; width: 200px; position: relative; left: 60px" class="card-img-top" src="https://static.thenounproject.com/png/30912-200.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">John Reese</h4>
					<div class="card-text">
						<span id="jugador3"></span>
						<span style="float left">vida: </span><span id="vida3"></span>
						<span style="float left">daño: </span><span id="ataque3"></span>
						<br>
						<span style="float right">critico: </span><span id="critico3"></span>
						<span style="float right">pociones: </span><span id="curacion3"></span>
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
				<img id="imgEnemigo1" style="height: 200px; width: 200px; position: relative; left: 60px" class="card-img-top" src="<?php echo base_url().'assets/img/mobs/'.rand(1, 4).'.png'?>" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">Enemigo</h4>
					<div style="" class="card-text">
						<span id="jugador4"></span>
						<span style="float left">vida: </span><span id="vida4"></span>
						<span style="float left">daño: </span><span id="ataque4"></span>
						<br>
						<span style="float right">critico: </span><span id="critico4"></span>
						<span style="float right">pociones: </span><span id="curacion4"></span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card text-center" style="width:300px;">
				<img id="imgEnemigo2" style="height: 200px; width: 200px; position: relative; left: 60px" class="card-img-top" src="<?php echo base_url().'assets/img/mobs/'.rand(1, 4).'.png'?>" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">Enemigo</h4>
					<div class="card-text">
						<span id="jugador5"></span>
						<span style="float left">vida: </span><span id="vida5"></span>
						<span style="float left">daño: </span><span id="ataque5"></span>
						<br>
						<span style="float right">critico: </span><span id="critico5"></span>
						<span style="float right">pociones: </span><span id="curacion5"></span>
					</div>    
					<!-- <a href="#" class="btn btn-primary"></a> -->
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card text-center" style="width:300px;">
				<img id="imgEnemigo3" style="height: 200px; width: 200px; position: relative; left: 60px" class="card-img-top" src="<?php echo base_url().'assets/img/mobs/'.rand(1, 4).'.png'?>" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">Enemigo</h4>
					<div class="card-text">
						<span id="jugador6"></span>
						<span style="float left">vida: </span><span id="vida6"></span>
						<span style="float left">daño: </span><span id="ataque6"></span>
						<br>
						<span style="float right">critico: </span><span id="critico6"></span>
						<span style="float right">pociones: </span><span id="curacion6"></span>
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
	<div class="degradadoborde text-center"style="height: 100px; width: 100%; background-color: rgba(75,75,75,0.2); float: left;color:red; font-size: 20px;" id="ganador"></div>
	<div class="mx-auto">
		<button style="height: 34px;margin-bottom: 10px" onclick="inicio_combate_automatico3()"type="button" class="btn btn-evexnod-outline">Combate automático</button>
		<!-- <button style="height: 34px;margin-bottom: 10px" onclick="pausar()"type="button" class="btn btn-evexnod-outline">Pausar</button> -->
		<!-- <button style="height: 34px;margin-bottom: 10px" onclick="ataque3()"type="button" class="btn btn-evexnod-outline">Siguiente turno</button> -->

	</div>
	
</div>


<div class="modal fade" id="puntajes" tabindex="-1" role="dialog" aria-labelledby="puntajes" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="puntajes">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#clases">
  Launch demo modal
</button>
 -->
<!-- Modal -->
<div class="modal fade" id="clases" tabindex="-1" role="dialog" aria-labelledby="clases" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="clases">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div  class="modal-body">
				<div  class="row">
					<div class="col-sm-4 text-center">
						<h4>Jugador Aliado 1</h4>
						<select id="actor1" class="custom-select">
							<option selected>Seleccione la clase</option>
							<option value="caballero">Caballero</option>
							<option value="ginete">Jinete</option>
							<option value="gladiador">Gladiador</option>
						</select>
					</div>
					<div  class="col-sm-4 text-center">
						<h4>Jugador Principal</h4>
						<select id="actor2" class="custom-select">
							<option selected>Seleccione la clase</option>
							<option value="caballero">Caballero</option>
							<option value="ginete">Jinete</option>
							<option value="gladiador">Gladiador</option>
						</select>
					</div>
						<div class="col-sm-4 text-center">
							<h4>Jugador Aliado 2</h4>
							<select  id="actor3" class="custom-select">
								<option selected>Seleccione la clase</option>
								<option value="caballero">Caballero</option>
								<option value="ginete">Jinete</option>
								<option value="gladiador">Gladiador</option>
							</select>
						</div>
				</div>
					<div style="" class="text-center">
						<br>
						<button type="button" class="btn btn-success" data-dismiss="modal">Continuar</button>
					</div>					
			</div>
			</div>
		</div>
	</div>




