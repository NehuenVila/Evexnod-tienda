<style>
	.h5-m{
		font-size: 17px;
	}
</style>

<script>
	$(document).ready(function(){
		var intervalo = setInterval(function(){
		    $("#a_premium").fadeOut();
		    $("#a_premium").fadeOut("slow");
		    $("a_premium").fadeOut(3000);
		    $("#a_premium").fadeIn();
		    $("#a_premium").fadeIn("slow");
		    $("a_premium").fadeIn(3000);
		}, 1000);
  });
</script>

<div class="row"style="background-color: rgba(59, 134, 209, 0.5);height:350px;margin:0px">
	<div class="col-sm-4 text-center evexnod-navbar-font">
		<img style="margin-top: -15px;border: solid 1px grey;"src="https://dummyimage.com/256x256/000/3b86d1" alt="...">
		<?php if(isset($id)) { ?>
		<h3 style="color:white; text-transform: uppercase"><?php echo $nombre; ?></h3>
		<?php if ($premium == 1) {?>
              <h3 style="color:white" id="a_premium">USUARIO PREMIUM</h3>
            <?php }else{ ?>
             <h3 style="color:white">Usuario no premium</h3>
           <?php } ?>
		
<!-- 		<div class="d-lg-none text-center" style="width: 100%">
			<button type="button" class="btn btn-outline-light" style="position: absolute;margin-top: 5px;margin-left: -85px" ><i class="fas fa-pen-square"></i>Editar pérfil</button>
		</div> -->

	</div>
	<div class="col-sm-8 d-none d-lg-block" style="padding-top: 25px;padding-left: 100px">
		<div class="row " style="height: 80%">
			<video width="470" height="240" controls>
				<source src="<?php echo base_url() ?>assets/video/Video_Fondo.mp4></video" type="video/mp4">
				</video>
			</div>
			<div class="row">
				<div class="btn-group" role="group" aria-label="Basic example" style="width: 470px">
					<button type="button" class="btn btn-outline-dark" style="width: 25%">Editar video</button>
					<button type="button" class="btn btn-outline-dark" style="width: 25%">Editar pérfil</button>
					<button type="button" class="btn btn-outline-dark" style="width: 25%">Inventario</button>
					<button type="button" class="btn btn-outline-dark" style="width: 25%">Mis juegos</button>
				</div>

			</div>
		</div>
	</div>
	<div class="row"style="background-color: transparent;height:500px;margin:0px">
		<div class="col-sm-12 d-block d-xl-none" style="background-color: rgba(59, 134, 209, 0.5);">

			<div class="row" style="height: 33%">
				<div class="col-sm-12 text-center">
					<h2 class="evexnod-navbar-font h5-m" style="font-size: 24px">nombre_del_juego_1</h2>
					<h5 class="evexnod-navbar-font h5-m">Horas Jugadas: <span id="hs1">000</span></h5>
					<h5 class="evexnod-navbar-font h5-m">Logros Desbloqueados: <span id="l1">00</span>/<span id="l1b">00</span></h5>
					<h5 class="evexnod-navbar-font h5-m">Desafios Completados: <span id="d1">00</span>/<span id="d1b">00</span></h5>
					<a class="btn btn-xs btn-outline-dark" href="" style="padding: 4px"><i class="fas fa-shopping-cart"></i> Ir a la Tienda</a>
				</div>
			</div>

			<div class="row" style="height: 33%">
				<div class="col-sm-12 text-center">
					<h2 class="evexnod-navbar-font h5-m" style="font-size: 24px">nombre_del_juego_2</h2>
					<h5 class="evexnod-navbar-font h5-m">Horas Jugadas: <span id="hs2">000</span></h5>
					<h5 class="evexnod-navbar-font h5-m">Logros Desbloqueados: <span id="l2">00</span>/<span id="l2b">00</span></h5>
					<h5 class="evexnod-navbar-font h5-m">Desafios Completados: <span id="d2">00</span>/<span id="d2b">00</span></h5>
					<a class="btn btn-xs btn-outline-dark" href="" style="padding: 4px"><i class="fas fa-shopping-cart"></i> Ir a la Tienda</a>
				</div>
			</div>

			<div class="row" style="height: 33%">
				<div class="col-sm-12 text-center">
					<h2 class="evexnod-navbar-font h5-m" style="font-size: 24px">nombre_del_juego_3</h2>
					<h5 class="evexnod-navbar-font h5-m">Horas Jugadas: <span id="hs3">000</span></h5>
					<h5 class="evexnod-navbar-font h5-m">Logros Desbloqueados: <span id="l3">00</span>/<span id="l3b">00</span></h5>
					<h5 class="evexnod-navbar-font h5-m">Desafios Completados: <span id="d3">00</span>/<span id="d3b">00</span></h5>
					<a class="btn btn-xs btn-outline-dark" href="" style="padding: 4px"><i class="fas fa-shopping-cart"></i> Ir a la Tienda</a>
				</div>
			</div>

		</div>
		<div class="col-sm-12 d-none d-xl-block" style="background-color: rgba(59, 134, 209, 0.5);">


			<div class="row" style="height: 33%">
				<div class="col-sm-8" style="background-color: background-color: rgb(59, 134, 209);border: 2px lightgrey dashed;border-right: 0px">
					<div class="row text-center" style=";height: 20%">
						<div class="col-sm-12">
							<h5 class="evexnod-navbar-font"style="font-size:18px; color: white;padding-top: 5px">Contenido destacado del juego:</h5>
						</div>
					</div>

					<div class="row" style="height: 80%">
						<div class="col-sm-4" style="background-color: transparent;">
							<img class="img-fluid"src="https://dummyimage.com/1920x1080/000/3b86d1" alt="...">
						</div>
						<div class="col-sm-4" style="background-color: transparent">
							<img class="img-fluid"src="https://dummyimage.com/1920x1080/000/3b86d1" alt="...">
						</div>
						<div class="col-sm-4" style="background-color: transparent">
							<img class="img-fluid"src="https://dummyimage.com/1920x1080/000/3b86d1" alt="...">
						</div>
					</div>
				</div>
				<div class="col-sm-4 text-center expositor" style="background-color: rgb(59, 134, 209);border: 2px lightgrey dashed">
					<h2 class="evexnod-navbar-font h5-m" style="font-size: 24px">nombre_del_juego_1</h2>
					<h5 class="evexnod-navbar-font h5-m">Horas Jugadas: <span id="hs1">000</span></h5>
					<h5 class="evexnod-navbar-font h5-m">Logros Desbloqueados: <span id="l1">00</span>/<span id="l1b">00</span></h5>
					<h5 class="evexnod-navbar-font h5-m">Desafios Completados: <span id="d1">00</span>/<span id="d1b">00</span></h5>
					<a class="btn btn-xs btn-outline-dark" href="" style="padding: 4px"><i class="fas fa-shopping-cart"></i> Ir a la Tienda</a>
				</div>
			</div>

			<div class="row" style="height: 33%">
				<div class="col-sm-8" style="background-color: background-color: rgb(59, 134, 209);border: 2px lightgrey dashed;border-right: 0px">
					<div class="row text-center" style=";height: 20%">
						<div class="col-sm-12">
							<h5 class="evexnod-navbar-font"style="font-size:18px; color: white;padding-top: 5px">Contenido destacado del juego:</h5>
						</div>
					</div>

					<div class="row" style="height: 80%">
						<div class="col-sm-4" style="background-color: transparent;">
							<img class="img-fluid"src="https://dummyimage.com/1920x1080/000/3b86d1" alt="...">
						</div>
						<div class="col-sm-4" style="background-color: transparent">
							<img class="img-fluid"src="https://dummyimage.com/1920x1080/000/3b86d1" alt="...">
						</div>
						<div class="col-sm-4" style="background-color: transparent">
							<img class="img-fluid"src="https://dummyimage.com/1920x1080/000/3b86d1" alt="...">
						</div>
					</div>
				</div>
				<div class="col-sm-4 text-center expositor" style="background-color: rgb(59, 134, 209);border: 2px lightgrey dashed">
					<h2 class="evexnod-navbar-font h5-m" style="font-size: 24px">nombre_del_juego_2</h2>
					<h5 class="evexnod-navbar-font h5-m">Horas Jugadas: <span id="hs2">000</span></h5>
					<h5 class="evexnod-navbar-font h5-m">Logros Desbloqueados: <span id="l2">00</span>/<span id="l2b">00</span></h5>
					<h5 class="evexnod-navbar-font h5-m">Desafios Completados: <span id="d2">00</span>/<span id="d2b">00</span></h5>
					<a class="btn btn-xs btn-outline-dark" href="" style="padding: 4px"><i class="fas fa-shopping-cart"></i> Ir a la Tienda</a>
				</div>
			</div>

			<div class="row" style="height: 33%">
				<div class="col-sm-8" style="background-color: background-color: rgb(59, 134, 209);border: 2px lightgrey dashed;border-right: 0px">
					<div class="row text-center" style=";height: 20%">
						<div class="col-sm-12">
							<h5 class="evexnod-navbar-font"style="font-size:18px; color: white;padding-top: 5px">Contenido destacado del juego:</h5>
						</div>
					</div>

					<div class="row" style="height: 80%">
						<div class="col-sm-4" style="background-color: transparent;">
							<img class="img-fluid"src="https://dummyimage.com/1920x1080/000/3b86d1" alt="...">
						</div>
						<div class="col-sm-4" style="background-color: transparent">
							<img class="img-fluid"src="https://dummyimage.com/1920x1080/000/3b86d1" alt="...">
						</div>
						<div class="col-sm-4" style="background-color: transparent">
							<img class="img-fluid"src="https://dummyimage.com/1920x1080/000/3b86d1" alt="...">
						</div>
					</div>
				</div>
				<div class="col-sm-4 text-center expositor" style="background-color: rgb(59, 134, 209);border: 2px lightgrey dashed">
					<h2 class="evexnod-navbar-font h5-m" style="font-size: 24px">nombre_del_juego_3</h2>
					<h5 class="evexnod-navbar-font h5-m">Horas Jugadas: <span id="hs3">000</span></h5>
					<h5 class="evexnod-navbar-font h5-m">Logros Desbloqueados: <span id="l3">00</span>/<span id="l3b">00</span></h5>
					<h5 class="evexnod-navbar-font h5-m">Desafios Completados: <span id="d3">00</span>/<span id="d3b">00</span></h5>
					<a class="btn btn-xs btn-outline-dark" href="" style="padding: 4px"><i class="fas fa-shopping-cart"></i> Ir a la Tienda</a>
				</div>
			</div>
		<?php } ?>


		</div>
	</div>

