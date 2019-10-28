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

</style>
<div class="row" style="height: 100px;background-color: rgb(59, 134, 209);margin: 0px">
	<div class="container evexnod-navbar-font" style=";;height: 100%;">

		<div class="row">
			<div class="col-sm-6">

				<h1 style="padding: 25px;font-weight: bolder">NOMBRE_DEL_JUEGO</h1>
			</div>

			<div class="col-sm-6">

				<span style="float: right">
					<div style="padding: 20px"class="button_cont" align="center"><a class="btn_store_div" href="#" target="_blank" data-toggle="modal" data-target="#modalCompra" rel="nofollow noopener"><i class="fas fa-shopping-cart"></i> COMPRAR</a>
					</div>
				</span>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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