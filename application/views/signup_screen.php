<br><br><br><br>

<div class="container">
	<div class="row">
		<div id="registro1" class="col-sm-12">
			<form action="<?php echo base_url()?>inicio/registrarse" method="post" name="f_registro">
				<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Nombre</label>
			      <input type="text" class="form-control" id="inputEmail4" name="r_nombre" placeholder="Nombre" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Apellido</label>
			      <input type="text" class="form-control" id="inputPassword4" name="r_apellido" placeholder="Apellido" required>
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Correo Electrónico</label>
			      <input type="email" class="form-control" id="inputEmail4" name="r_mail" placeholder="Correo Electrónico" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Constraseña</label>
			      <input type="password" class="form-control" id="inputPassword4"  name="r_clave" placeholder="Contraseña" required>
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="gridCheck" required>
			      <label class="form-check-label" for="gridCheck">
			        Acepto los términos y condiciones.
			      </label>
			    </div>
			  </div>


			  <button type="submit" class="btn btn-primary">Registrarse</button>
			</form>
		</div>
	</div>
</div>	