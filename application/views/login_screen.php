<br><br><br><br>

<div class="container">
	<br><br><br>
	<div class="row">
		<div class="col-sm-12">
			<form action="<?php echo base_url()?>inicio" method="post" name="l_ingreso" style="margin:0px;padding: 0px">
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Correo Electrónico</label>
			      <input type="email" name="l_correo" class="form-control" id="inputEmail4" placeholder="Correo Electrónico">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Contraseña</label>
			      <input type="password" name="l_clave" class="form-control" id="inputPassword4" placeholder="Contraseña">
			    </div>
			  </div>
			  <button style="float: left;margin-right: 10px" type="submit" class="btn btn-success">Iniciar sesion</button>
			</form>
			<form action="<?php echo base_url()?>inicio/mostrar_registro" method="post" name="registroActivado">
				<button style="float: left" class="btn btn-primary">Crear cuenta</button>
			</form>
		</div>
		<?php if (false) { ?>
		<div style="width: 100%; height: 100px; background-color: red">
			
		</div>
		<?php } ?>
	</div>
</div>




