<style>

  .input-evexnod{
    background-color: rgba(0,0,0,0.2);
    border: 1px solid white;
    color: darkgrey;
  }

  .input-evexnod:focus{
    background-color: rgba(0,0,0,0.5);
    border: 1px solid white;
    color: white;
  }

  input::placeholder {
    color: darkgrey !important;
  }

  .navbar-position
  {
    z-index: 101;
    width: 100%;
  }
  .nav-item
  {
    margin-left: 40px;
  }
  .dropdown-item{
    color: background-color: rgb(59, 134, 209);
  }
  .dropdown-item:hover{
    background-color: rgb(98, 167, 204);
  }
  .dropdown-menu{
    margin-top: 12px;
    background-color: rgb(59, 134, 209);
    border-radius: 4px;
    color: orange;
  }

  .btn-nav
  {
    color: red;
  }
  a:hover {
    text-decoration: none;
  }

  .navPrincipal
  {
    background-color: rgb(59, 134, 209);
  }
  .active{
    color: rgb(255, 255, 255);
  }
  .blanco-trans{
    color: rgba(255, 255, 255, 0.8) !important;
  }

  .navbar
  {
    font-family: 'Farro', sans-serif;
  }

  .ul-usuario
  {
    float: left;
    margin: 0px;
    padding: 0px;
    text-decoration: none;
    float: left;

  }

  .img-pro{
    height: 60px;
    width: 60px;
    position: relative; left: 20px
  }
  .img-pro:hover{
    clip-path: polygon(0 0, 10% 0, 10% 10%, 0 10%); 
    clip-path: circle(150px at center);
  }

  .cabezaModal{
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 0%, rgba(50,50,149,1) 0%, rgba(0,212,255,1) 81%);
  }

  .evexnod-navbar-font{
    font-size: 14px;
    letter-spacing: 3px;
    color: rgba(255,255,255,0.8)
  }

  .contenedor{
    padding: 10px;
  }

  .expositor{
    margin-top: 0px;
    transition: 0.5s;
  }

  .expositor:hover{
    margin-top: -10px;
    transition: 0.5s;
    -webkit-box-shadow: 0px 10px 21px -6px rgba(0,0,0,0.76);
    -moz-box-shadow: 0px 10px 21px -6px rgba(0,0,0,0.76);
    box-shadow: 0px 10px 21px -6px rgba(0,0,0,0.76);
  }

  .seleccionDesactivada {
    user-select: none;
    -moz-user-select: none;
  }

  .btn-evexnod-outline{
    background-color: transparent;
    color:grey;
    font-size: 18px;
    border: 2px solid;
    padding: 6px;
    border-color: grey;
    border-width: 2px;
  }
  .evexnod-expositor-font{
    font-size: 18px;
    letter-spacing: 2px;
    color: rgb(59, 134, 209);
    font-weight: bolder;
    text-transform: uppercase;
  }

</style>

<script>

  var login = false;

  function ocultarAlerta(){
    $('#alerta').hide();
        // $.ajax({
        // url: base_url + 'inicio/cerrar_sesion',
        // type: 'POST'
        // });
      }
      $(document).ready(function(){

        if ($('#alerta').length > 0){
          setTimeout(function(){
            ocultarAlerta();
          }, 4500);
        }
      });

    </script>
    
    <?php if(isset($error)) { ?>
      <div style="position: absolute; z-index: 110;width: 100%;border-radius: 0px" class="alert alert-danger text-center" id="alerta" role="alert">
        <?php echo $error; ?>
      </div>
    <?php } ?>
    <!-- alerta exitosa -->
    <?php if(isset($success)) { ?>
      <div style="position: absolute; z-index: 110;width: 100%;border-radius: 0px" class="alert alert-success text-center" id="alerta" role="alert">
        <?php echo $success; ?>
      </div>
    <?php } ?>
    
    <nav class="navbar navbar-expand-lg  navbar-dark navPrincipal navbar-position">

      <a  class="navbar-brand blanco-trans evexnod-navbar-font" style="font-size: 18px" href="<?php echo base_url()?>inicio/"><img style="margin-right: 10px" src="<?php echo base_url()?>assets/img/evexnod_logo.png" alt="">Evexnod</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active evexnod-navbar-font" href="#" id="navbardrop" data-toggle="dropdown">JUEGOS</a>
            <div class="dropdown-menu">
              <a class="dropdown-item evexnod-navbar-font" href="<?php echo base_url()?>./inicio/tienda/1"><i class="fas fa-chess-rook"></i> BATTLE OF DUNGEON</a>
              <a class="dropdown-item evexnod-navbar-font" href="<?php echo base_url()?>./inicio/tienda/2"><i class="fab fa-fort-awesome"></i> DEFENSE OF TWEDJEN TOWER</a>
              <a class="dropdown-item evexnod-navbar-font" href="<?php echo base_url()?>./inicio/tienda/3"><i class="fas fa-globe-americas"></i> RHAN'S JOURNEY</a>
              <a class="dropdown-item evexnod-navbar-font" href="<?php echo base_url()?>./inicio/tienda/4"><i class="fas fa-user-astronaut"></i> OPERATION RECONQUEST</a>
              <a class="dropdown-item evexnod-navbar-font" href="<?php echo base_url()?>./inicio/tienda/5"><i class="fas fa-rocket"></i> ENDLESS ASTEROIDS</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item evexnod-navbar-font" href="#"><i class="fab fa-js-square"></i> El Javascript xd</a>
              
            </div>
          </li>

          <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle active evexnod-navbar-font" href="#" id="navbardrop" data-toggle="dropdown">TIENDA</a>
           <div class="dropdown-menu">
             <a class="dropdown-item evexnod-navbar-font" href="<?php echo base_url()?>inicio/mostrar_tienda"><i class="fas fa-gamepad"></i> JUEGOS</a>
             <?php if(isset($id)) { ?>
              <?php if ($premium == 0) {?>
                <a class="dropdown-item evexnod-navbar-font" data-toggle="modal" data-target="#premium" href="#"><i class="fas fa-crown"></i> PREMIUM</a>
              <?php }else{ ?>
                <a class="dropdown-item evexnod-navbar-font" data-toggle="modal" data-target="#premiumComprado" href="#"><i class="fas fa-crown"></i> PREMIUM</a>
              <?php } ?>
            <?php } ?>
            <a class="dropdown-item evexnod-navbar-font" href="#"><i class="fas fa-gem"></i> ESPECIALES</a>
          </div>
        </li>

        <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle active evexnod-navbar-font" href="#" id="navbardrop" data-toggle="dropdown">ACERCA DE</a>
         <div class="dropdown-menu">
           <a class="dropdown-item evexnod-navbar-font" href="#"><i class="fas fa-newspaper"></i> NOSOTROS</a>
           <a class="dropdown-item evexnod-navbar-font" href="#"><i class="fas fa-folder-open"></i> PROYECTOS</a>
           <a class="dropdown-item evexnod-navbar-font" href="#"><i class="fas fa-cubes"></i> NUEVO CONTENIDO</a>
         </div>
       </li>
     </ul>
     <ul class="ul-usuario navbar-nav ml-auto">
       <li class="nav-item active mr-auto">
        <a class="nav-link blanco-trans evexnod-navbar-font" href="#">SOPORTE <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <?php if(isset($id)) { ?>
          <a style="text-transform: uppercase" class="nav-link dropdown-toggle active evexnod-navbar-font" href="#" id="navbardrop" data-toggle="dropdown"><?php echo $nombre; ?></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item evexnod-navbar-font" id="N_usuario" href="<?php echo base_url()?>inicio/perfil_usuario">Ver perfil</a>
            <?php if ($premium == 0) {?>
              <a class="dropdown-item evexnod-navbar-font" id="N_usuario" data-toggle="modal" data-target="#premium" href="#"> Usuario no premium</a>
            <?php }else{ ?>
             <a class="dropdown-item evexnod-navbar-font" data-toggle="modal" data-target="#premiumComprado" href="#"> Usuario premium</a>
           <?php } ?>
           <a class="dropdown-item evexnod-navbar-font" id="N_usuario" data-toggle="modal" data-target="#monedas" href="#"> Monedas: <?php echo $creditos; ?></a>
           <a class="dropdown-item evexnod-navbar-font" id="M_usuario" href="<?php echo base_url()?>inicio/cerrar_sesion"> Cerrar Sesion</a>
           <div class="dropdown-divider"></div>
         <?php } else { ?>
          <a style="text-transform: uppercase" class="nav-link dropdown-toggle active evexnod-navbar-font" href="#" id="navbardrop" data-toggle="dropdown">USUARIO</a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item evexnod-navbar-font" id="N_usuario" data-toggle="modal" data-target="#sesion" href="#"><i class="fas fa-sign-in-alt"></i> INICIAR SESION</a>
            <a class="dropdown-item evexnod-navbar-font" id="M_usuario" data-toggle="modal" data-target="#registro" href="#"><i class="fas fa-pen-square"></i> REGISTRARSE</a>
            <div class="dropdown-divider"></div>
          <?php } ?>
          <a class="dropdown-item evexnod-navbar-font" id="C_usuario" data-toggle="modal" data-target="#reglas" href="#"><i class="fas fa-book-open"></i> TERMINOS Y CONDICIONES</a>
        </div>
      </li>

    </ul>
  </div>
</nav>

<!-- <div class="" id="login">

  <div class="card" style="width:300px; position: absolute; left: 1050px; z-index: 102; margin: 0px;margin-top: 4px; padding: 0px; border-radius: 2px; ">

    <div style="background-color: white;" class="card-header text-center">
      <a href="#" style=" width: 200px; height: 30px; border-radius: 2px; padding: 0px;margin: 0px; color: white;" class="btn btn-primary" data-toggle="modal" data-target="#sesion">Iniciar Sesion</a>
    </div>
    <div style="height: 40px;" class="card-text text-center">
      <a href="#" data-toggle="modal" data-target="#reglas" style="color: grey; position: relative; top: 7px; padding: 0px; margin: 0px;" ><i class="far fa-cog"></i> Politica de uso </a>
    </div>
    <div style="height: 40px; background-color: white;" class="card-footer text-center">         
      <a style="color: grey; position: relative; bottom: 7px;" href="#" class="registro" data-toggle="modal" data-target="#registro"><i class="fal fa-user-plus"></i> Registrarse </a>
    </div>  
  </div>
</div>

<div class="" id="usuario"> 

  <div class="card" style="width:300px; position: absolute; left: 1050px; z-index: 102; margin-top: 58px; margin-left: 0px; margin-right: 0px;margin-bottom: 0px; padding: 0px; border-radius: 2px; ">

    <div style="background-color: white;" class="card-header text-center">
      <a href="#" style="color: grey; position: relative; top: 7px; padding: 0px; margin: 0px;" ><i class="far fa-user"></i></a>
    </div>
    <div style="height: 40px;" class="card-text text-center">
      <a href="#" style="color: grey; position: relative; top: 7px; padding: 0px; margin: 0px;" ><i class="far fa-money-bill"></i></a>
    </div>
    <div style="height: 40px; background-color: white;" class="card-footer text-center">         
      <a style="color: grey; position: relative; bottom: 7px;" href="#" class=""><i class="far fa-cart-arrow-down"></i> comprar creditos </a>
    </div>  
  </div>
</div> -->

<!-- modal inicio sesion v2 -->
<div class="modal fade" id="sesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <form action="<?php echo base_url()?>inicio/login" method="post" name="u_login">
    <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
      <div class="modal-content" style="background-color: rgba(59, 134, 209, 0.9);border-radius: 0px">
        <div class="modal-header">
          <h5 class="modal-title evexnod-navbar-font" style="font-size: 28px"id="exampleModalLongTitle">Inicio de Sesión Evexnod:</h5>
        </div>
        <div class="modal-body" style="background-color: rgba(146,154,176, 0.1); background-image: url('<?php echo base_url(); ?>assets/img/fondos/4.png');">
          <h5 style="color: rgba(255,255,255,0.8)">Ingrese sus datos:</h5>
          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="email" class="form-control input-evexnod" id="l_mail" name="l_mail" placeholder="Correo Electronico...">
            </div>
            <div class="form-group col-md-12">
              <input type="password" class="form-control input-evexnod" id="l_clave" name="l_clave" placeholder="Contraseña...">
            </div>
          </div>      
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label style="color:white"class="form-check-label" for="gridCheck">
                Recordar mis datos.
              </label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group" role="group" aria-label="Basic example"style="width: 100%">
            <button type="button" style="width: 30%;border-radius: 0px"class="btn btn-outline-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
            <button type="button" style="width: 30%;border-radius: 0px"class="btn btn-outline-light" data-dismiss="modal" data-toggle="modal" data-target="#registro"><i class="fas fa-pen-square"></i> Registrarse</button>
            <button type="submit" style="width: 30%;border-radius: 0px"class="btn btn-outline-light"><i class="fas fa-sign-in-alt"></i> Iniciar Sesion</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- modal registro v2 -->
<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <form action="<?php echo base_url()?>inicio/registrarse" method="post" name="f_registro">
    <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
      <div class="modal-content" style="background-color: rgba(59, 134, 209, 0.9);border-radius: 0px">
        <div class="modal-header">
          <h5 class="modal-title evexnod-navbar-font" style="font-size: 28px"id="exampleModalLongTitle">Creación de cuenta Evexnod:</h5>
        </div>
        <div class="modal-body" style="background-color: rgba(146,154,176, 0.1); background-image: url('<?php echo base_url(); ?>assets/img/fondos/4.png');">
          <h5 style="color: rgba(255,255,255,0.8)">Ingrese sus datos de registro:</h5>
          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="email" required="required" class="form-control input-evexnod" name="r_mail" id="inputAddress" placeholder="Correo Electronico">
            </div>
            <div class="form-group col-md-12">
              <input type="text" required="required" class="form-control input-evexnod" name="r_nombre" id="inputEmail4" placeholder="Nombre De Usuario">
            </div>
            <div class="form-group col-md-12">
              <input type="password" required="required" class="form-control input-evexnod" name="r_clave" id="inputPassword4" placeholder="Contraseña">
            </div>
          </div>      
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label style="color:white"class="form-check-label" for="gridCheck">
                Acepto los <a href="" data-dismiss="modal" data-toggle="modal" data-target="#reglas" style="color: #f2f2f2;font-style: italic;">Términos y condiciones</a> de Evexnod.
              </label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group" role="group" aria-label="Basic example"style="width: 100%">
            <button type="button" style="width: 30%;border-radius: 0px"class="btn btn-outline-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
            <button type="submit" style="width: 30%;border-radius: 0px"class="btn btn-outline-light"><i class="fas fa-pen-square"></i> Registrarse</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- modal terminos y condiciones v2 -->
<div class="modal fade" id="reglas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
    <div class="modal-content" style="background-color: rgba(59, 134, 209, 0.9);border-radius: 0px">
      <div class="modal-header">
        <h5 class="modal-title evexnod-navbar-font" style="font-size: 28px"id="exampleModalLongTitle">Términos y condiciones:</h5>
      </div>
      <div class="modal-body" style="background-color: rgba(146,154,176, 0.1); background-image: url('<?php echo base_url(); ?>assets/img/fondos/4.png');">
        <p style=" color: rgba(255,255,255,0.8)">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione illo eum tempore dolorem eaque fugiat incidunt iusto minima rem eveniet aliquid similique quis laudantium consectetur, officia, ex et distinctio perspiciatis?</p>
        <div class="text-center">
          <span style="font-size: 16px; color:white">Última actualización: Octubre 2019 - Evexnod<i style="font-size: 12px;font-weight: 100"class="far fa-registered"></i> Store </span>
        </div>
      </div>
      <div class="modal-footer">

        <div class="btn-group" role="group" aria-label="Basic example"style="width: 100%">
          <button type="button" style="width: 40%;border-radius: 0px"class="btn btn-outline-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
          <button type="button" style="width: 40%;border-radius: 0px"class="btn btn-outline-light" data-dismiss="modal"><i class="fas fa-check-circle"></i> Aceptar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal comprar monedas -->
<div class="modal fade" id="monedas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <form action="<?php echo base_url()?>inicio/comprar_monedas" method="post" name="monedas">
    <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
      <div class="modal-content" style="background-color: rgba(59, 134, 209, 0.9);border-radius: 0px">
        <div class="modal-header">
          <h5 class="modal-title evexnod-navbar-font" style="font-size: 28px"id="exampleModalLongTitle">Cargar monedas:</h5>
        </div>
        <div class="modal-body" style="background-color: rgba(146,154,176, 0.1); background-image: url('<?php echo base_url(); ?>assets/img/fondos/4.png');">
          <h5 style="color: rgba(255,255,255,0.8)">Ingrese su monto a cargar</h5>
          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="text" required="required" class="form-control input-evexnod" name="monedas" id="monedas" placeholder="Cantidad de monedas">
            </div>
          </div>      
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label style="color:white"class="form-check-label" for="gridCheck">
                Acepto los <a href="" data-dismiss="modal" data-toggle="modal" data-target="#reglas" style="color: #f2f2f2;font-style: italic;">Términos y condiciones</a> de Evexnod.
              </label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group" role="group" aria-label="Basic example"style="width: 100%">
            <button type="button" style="width: 30%;border-radius: 0px"class="btn btn-outline-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
            <button type="submit" style="width: 30%;border-radius: 0px"class="btn btn-outline-light"><i class="fas fa-pen-square"></i> Cargar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- modal comprar premium -->
<div class="modal fade" id="premium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <form action="<?php echo base_url()?>inicio/comprar_premium" method="post" name="premium">
    <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
      <div class="modal-content" style="background-color: rgba(59, 134, 209, 0.9);border-radius: 0px">
        <div class="modal-header">
          <h5 class="modal-title evexnod-navbar-font" style="font-size: 28px"id="exampleModalLongTitle">Acceso usuario premium:</h5>
        </div>
        <div class="modal-body" style="background-color: rgba(146,154,176, 0.1); background-image: url('<?php echo base_url(); ?>assets/img/fondos/4.png');">
          <h5 style="color: rgba(255,255,255,0.8)">Eliga su paquete premium</h5>
          <div class="form-row">
            <!-- <div class="form-group col-md-12">
              <input type="text" required="required" class="form-control input-evexnod" name="monedas" id="monedas" placeholder="Cantidad de monedas">
            </div> -->
          </div>      
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label style="color:white"class="form-check-label" for="gridCheck">
                Acepto los <a href="" data-dismiss="modal" data-toggle="modal" data-target="#reglas" style="color: #f2f2f2;font-style: italic;">Términos y condiciones</a> de Evexnod.
              </label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group" role="group" aria-label="Basic example"style="width: 100%">
            <button type="button" style="width: 30%;border-radius: 0px"class="btn btn-outline-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
            <button type="submit" style="width: 30%;border-radius: 0px"class="btn btn-outline-light"><i class="fas fa-pen-square"></i> Comprar <span class="badge badge-light">$100</span></button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- modal ya esta disponible el premium -->
<div class="modal fade" id="premiumComprado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <form action="" method="post" name="premium">
    <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
      <div class="modal-content" style="background-color: rgba(59, 134, 209, 0.9);border-radius: 0px">
        <div class="modal-header">
          <h5 class="modal-title evexnod-navbar-font" style="font-size: 28px"id="exampleModalLongTitle">Acceso usuario premium:</h5>
        </div>
        <div class="modal-body" style="background-color: rgba(146,154,176, 0.1); background-image: url('<?php echo base_url(); ?>assets/img/fondos/4.png');">
          <h5 style="color: rgba(255,255,255,0.8)">Usted ya cuenta con nuestro servicio premium</h5>
          <div class="form-row">
            <!-- <div class="form-group col-md-12">
              <input type="text" required="required" class="form-control input-evexnod" name="monedas" id="monedas" placeholder="Cantidad de monedas">
            </div> -->
          </div>      
          <div class="form-group">
            <div class="form-check">
              <!-- <label style="color:white"class="form-check-label" for="gridCheck">
                Acepto los <a href="" data-dismiss="modal" data-toggle="modal" data-target="#reglas" style="color: #f2f2f2;font-style: italic;">Términos y condiciones</a> de Evexnod.
              </label> -->
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group" role="group" aria-label="Basic example"style="width: 100%">
            <button type="button" style="width: 30%;border-radius: 0px"class="btn btn-outline-light" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<script>
  var base_url = '<?php echo base_url(); ?>'
</script>