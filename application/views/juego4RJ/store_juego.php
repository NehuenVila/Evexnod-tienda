<style>
	.btn_store_div {
		border: none;
		color: white;
		background: none;

		font-weight: 450;
		padding: 20px;
		text-transform: uppercase;
		border-radius: 1px;
		display: inline-block;
		transition: all 0.3s ease 0s;
	}

	.btn_store_div:hover {
		font-weight: 700 !important;
		background: #404040;
		color: #ffffff !important;
		letter-spacing: 3px;
		-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
		-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
		transition: all 0.3s ease 0s;
	}

	@media (min-width: 1199px){
		.responsive{
			font-size:44px;
		}
	}
	@media (min-width: 992px) and (max-width: 1199px){
		.responsive{
			font-size:42px;
		}
	}
	@media (min-width: 768px) and (max-width: 991px){
		.responsive{
			font-size:38px;
		}
	}
	@media (min-width: 576px) and (max-width: 767px){
		.responsive{
			font-size:28px;
		}
	}
	@media (max-width: 575px){
		.responsive{
			font-size:28px;
		}
	}

</style>
<div class="row" style="height: 100px;background-color: rgb(59, 134, 209);margin: 0px">
	<div class="container evexnod-navbar-font" style=";;height: 100%;">

		<div class="row">
			<div class="col-sm-9">

					<h1 class="responsive"style="padding: 25px;font-weight: bolder">OPERATION RECONQUEST</h1>
					
				</div>

				<div class="col-sm-3 align-self-center">

					<span class="d-none d-md-block"style="float: right;background-color: transparent;">
						<div style="padding: 5px"class="button_cont" align="center">
							<a class="btn_store_div" href="#" target="_blank" data-toggle="modal" data-target="#modalCompra" rel="nofollow noopener"><i class="fas fa-shopping-cart"></i> COMPRAR</a>
						</div>
					</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal de compra -->
	<div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<form action="<?php echo base_url() ?>inicio/comprar_juego/4" method="post">

		<div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
			<div class="modal-content" style="background-color: rgba(59, 134, 209, 0.9);border-radius: 0px">
				<div class="modal-header">
					<h5 class="modal-title evexnod-navbar-font" style="font-size: 28px"id="exampleModalLongTitle">BATTLE OF DUNGEON</h5>

				</div>
				<!-- <div class="modal-body" style="background-color: rgba(146,154,176, 0.1)"> -->
					<div class="modal-body" style="background-color: rgba(146,154,176, 0.1); background-image: url('<?php echo base_url(); ?>assets/img/fondos/4.png');">
						<h5 style="color: rgba(255,255,255,0.8)">NOMBRE_EDICION: <span><span style="float:right"class="badge badge-light">$ 1.000</span></span></h5>
						<p style=" color: rgba(255,255,255,0.8)">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione illo eum tempore dolorem eaque fugiat incidunt iusto minima rem eveniet aliquid similique quis laudantium consectetur, officia, ex et distinctio perspiciatis?</p>
					</div>
					<div class="modal-footer">
						<input type="hidden" value="400" name="precio">

						<div class="btn-group" role="group" aria-label="Basic example"style="width: 100%">
							<button type="button" style="width: 40%;border-radius: 0px"class="btn btn-outline-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
							<button type="submit" <?php if ($tiene_juego == 1) {
								echo 'disabled';
							} ?> style="width: 40%;border-radius: 0px"class="btn btn-outline-light"><i class="fas fa-shopping-cart"></i> Comprar</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>


<!-- background-color: #3c3d39;
background-image: url("https://www.transparenttextures.com/patterns/cubes.png"); -->