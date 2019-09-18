<style>
  .navbar-position
  {
    position: absolute;
    z-index: 101;
    width: 100%;
  }
  .nav-item
  {
    margin-left: 40px;
  }
  .dropdown-item{
    /*opacity: 1 !important;*/
    /*filter: alpha(opacity=50) !important;*/
    color: background-color: rgb(59, 134, 209);
  }
  .dropdown-item:hover{
    /*color: background-color: rgb(59, 134, 209);*/
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
    /*opacity: 0.7;*/
    /*filter: alpha(opacity=50);*/
    background-color: rgb(59, 134, 209);
  }
  .active{
    color: rgba(255, 255, 255, 0.8) !important;
  }
  .blanco-trans{
    color: rgba(255, 255, 255, 0.8) !important;
  }

  .navbar
  {
    font-family: 'Farro', sans-serif;
/*    -webkit-box-shadow: 0px 9px 15px -4px rgba(0,0,0,0.91); 
    box-shadow: 0px 9px 15px -4px rgba(0,0,0,0.91);*/
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
    
    /*clip-path: polygon(0 0, 10% 0, 10% 10%, 10% 10%); 
    clip-path: circle(50px at 50% 150px);*/
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

</style>

<script>

  var login = false;

  $(document).ready(function(){
    $("#login").hide();
    $("#usuario").hide();
    $("#perfil").click(function(){
      if (login == false) {
        $("#login").show();
        $(this).html('Perfil <i class="fas fa-chevron-up"></i><span class="sr-only">(current)</span>');
        login = true;
      }else{
        $("#login").hide();
        $(this).html('Perfil <i class="fas fa-chevron-down"></i><span class="sr-only">(current)</span>');
        login = false;
      }   
    });
  });

</script>

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
          <a class="dropdown-item evexnod-navbar-font" href="#">BATTLE OF DUNGEON</a>
          <a class="dropdown-item evexnod-navbar-font" href="#">DEFENSE OF TWEDJEN TOWER</a>
          <a class="dropdown-item evexnod-navbar-font" href="#">RHAN'S JOURNEY</a>
          <a class="dropdown-item evexnod-navbar-font" href="#">OPERATION RECONQUEST</a>
          <a class="dropdown-item evexnod-navbar-font" href="#">ENDLESS ASTEROIDS</a>
        </div>
      </li>

      <li class="nav-item dropdown">
	    <a class="nav-link dropdown-toggle active evexnod-navbar-font" href="#" id="navbardrop" data-toggle="dropdown">TIENDA</a>
	    <div class="dropdown-menu">
	        <a class="dropdown-item evexnod-navbar-font" href="<?php echo base_url()?>inicio/mostrar_tienda">JUEGOS</a>
	        <a class="dropdown-item evexnod-navbar-font" href="#">PREMIUM</a>
	        <a class="dropdown-item evexnod-navbar-font" href="#">ESPECIALES</a>
      	</div>
      </li>

      <li class="nav-item dropdown">
	    <a class="nav-link dropdown-toggle active evexnod-navbar-font" href="#" id="navbardrop" data-toggle="dropdown">ACERCA DE</a>
	    <div class="dropdown-menu">
	        <a class="dropdown-item evexnod-navbar-font" href="#">NOSOTROS</a>
	        <a class="dropdown-item evexnod-navbar-font" href="#">PROYECTOS</a>
	        <a class="dropdown-item evexnod-navbar-font" href="#">NUEVO CONTENIDO</a>
      	</div>
      </li>
    </ul>
    <ul class="ul-usuario navbar-nav ml-auto">
    	<li class="nav-item active mr-auto">
          <a class="nav-link blanco-trans evexnod-navbar-font" href="#">SOPORTE <span class="sr-only">(current)</span></a>
      </li>
    	<li class="nav-item active mr-auto">
        <a href="#" class="nav-link blanco-trans evexnod-navbar-font" id="perfil" >PERFIL <i class="fas fa-chevron-down"></i><span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="" id="login">

  <div class="card" style="width:300px; position: absolute; left: 1050px; z-index: 102; margin-top: 58px; margin-left: 0px; margin-right: 0px;margin-bottom: 0px; padding: 0px; border-radius: 2px; ">
    
      <div style="background-color: white;" class="card-header text-center">
        <a href="#" style=" width: 200px; height: 30px; border-radius: 2px; padding: 0px;margin: 0px; color: white;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Iniciar Sesion</a>
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
        <a href="#" style="color: grey; position: relative; top: 7px; padding: 0px; margin: 0px;" ><i class="far fa-user"></i> AAAAAAAA </a>
      </div>
      <div style="height: 40px;" class="card-text text-center">
        <a href="#" style="color: grey; position: relative; top: 7px; padding: 0px; margin: 0px;" ><i class="far fa-money-bill"></i> 99999 </a>
      </div>
       <div style="height: 40px; background-color: white;" class="card-footer text-center">         
        <a style="color: grey; position: relative; bottom: 7px;" href="#" class=""><i class="far fa-cart-arrow-down"></i> comprar creditos </a>
       </div>  
  </div>
</div>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Inicio de Sesion</h5>        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url()?>inicio/login" method="post" name="u_login">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Correo Electronico</label>
              <input type="email" class="form-control" id="l_mail" name="l_mail" placeholder="Correo Electronico">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" class="form-control" id="l_clave" name="l_clave" placeholder="contraseña">
            </div>
          </div>      
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Recuerdame
              </label>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>         
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="registro" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url()?>inicio/registrarse" method="post" name="f_registro">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombre De Usuario</label>
              <input type="text" required="required" class="form-control" name="r_nombre" id="inputEmail4" placeholder="Nombre De Usuario">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" required="required" class="form-control" name="r_clave" id="inputPassword4" placeholder="Contraseña">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Correo Electronico</label>
            <input type="email" required="required" class="form-control" name="r_mail" id="inputAddress" placeholder="Correo Electronico">
          </div>
          <div class="text-center"><button type="submit" class="btn btn-primary">Registrarse</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button></div> 
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reglas" tabindex="-1" role="dialog" aria-labelledby="reglas" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam voluptatem earum mollitia adipisci sed, amet nisi aperiam. Consequuntur est impedit quo velit, temporibus a debitis. Ullam hic qui voluptas, fugiat. 
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe fugiat molestiae consequuntur recusandae, ipsa, modi eum quae delectus ullam vero ut sed consequatur incidunt in quaerat, nisi architecto accusantium itaque? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus et, corrupti amet aspernatur, officiis, recusandae animi quo omnis veniam architecto nisi sunt incidunt voluptatem tenetur quisquam accusantium asperiores illo magni!
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi beatae nemo consectetur exercitationem voluptate tenetur, nihil, nulla laudantium ex esse officiis incidunt earum est nisi, omnis a dicta perspiciatis nam.
       <div class="text-center">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
</div>


<!-- href="<?php echo base_url()?>inicio/mostrar_login"link para el inicio de session -->
<!--  navbar para pantalla movil -->
<!-- <nav class="navbar navbar-expand-lg  navbar-dark navPrincipal navbar-position">
  
  <a  class="navbar-brand" href="<?php echo base_url()?>inicio/"><img style="margin-right: 10px;" src="<?php echo base_url()?>assets/img/evexnod_logo.png" alt="">Evexnod</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">JUEGOS</a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Battle of Dungeon</a>
          <a class="dropdown-item" href="#">Defense of Twedjen Tower</a>
          <a class="dropdown-item" href="#">Rhan's Journey</a>
        </div>
      </li>

      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">TIENDA</a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="<?php echo base_url()?>inicio/mostrar_tienda">juegos</a>
          <a class="dropdown-item" href="#">premium</a>
          <a class="dropdown-item" href="#">especiales</a>
        </div>
      </li>

      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">A CERCA DE</a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="#">nosotros</a>
          <a class="dropdown-item" href="#">proyectos</a>
          <a class="dropdown-item" href="#">nuevo contenido</a>
        </div>
      </li>
    </ul>
    <ul class="ul-usuario navbar-nav ml-auto">
      <li class="nav-item active mr-auto">
          <a class="nav-link" href="#">Soporte<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active mr-auto">
        <a href="#" class="nav-link" data-toggle="collapse" data-target="#collapseExample">iniciar session<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
 -->