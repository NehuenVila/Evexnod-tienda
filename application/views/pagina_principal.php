<style>
	.btn-nav
	{
		color: red;
	}

	.imgCarousel
	{
		width: 100%;
		height: 600px;
	}
	.desenfoque
	{
		filter: blur(8px);
	}
	.imgJuegos
	{
		
		height: 250px;
		width: 250px;
		float: right;
		border-radius: 3px;
	}
	.imgFondoAzul
	{
		height: 400px !important;
		background-image: url('https://cdn.pixabay.com/photo/2015/07/31/20/38/background-869586_960_720.png');
	}
	.lineaCeleste
	{
		height: 5px;
		background-color: lightblue;
	}
	.fontWhite
	{
		color: white;
	}
	.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  width: 80%;
  height: 80%;
  left: 10%;
  top: 10%;
  border-bottom: 1px solid #FFF;
  border-top: 1px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
}
.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(0.6);
  -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  color: white;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.rowDegradado{
	background: rgb(2,0,36);
	background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 0%, rgba(50,50,149,1) 0%, rgba(0,212,255,1) 81%);
	/*height: 400px;*/
}
.transBlack{
	background-color: rgba(0,0,0,0.5);
}




</style>
	<br>
	<br>
	<div class="container">
		<div style="padding-top: 10px;" class="bd-example">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="imgCarousel" src="https://images2.alphacoders.com/602/602223.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>First slide label</h5>
							<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="imgCarousel" src="http://www.photobackgroundhd.com/wp-content/uploads/2018/12/rise-of-the-tomb-raider-4k-wallpaper.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Second slide label</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="imgCarousel" src="http://getwallpapers.com/wallpaper/full/1/1/e/926359-vertical-nfs-wallpaper-1920x1080-for-android-50.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Second slide label</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>

		<br>
		<br>
		<div style=" padding-left: 30px; padding-right: 30px;" class="container">
			<div style="height: 400px;" class="row transBlack">
				<br>
				<br>
				<div  class="col-sm-12 col-xl-12">
					<h2 style="color: white;" class="" >Juegos</h2>
					<br>
					<div class="row">
						<div class="col-sm-3 hovereffect">
							<img class="imgJuegos" src="https://store.playstation.com/store/api/chihiro/00_09_000/container/US/en/999/UP1003-CUSA04493_00-MNCRSHFULLBUNDLE/1565132535000/image?w=240&h=240&bg_color=000000&opacity=100&_version=00_09_000" alt="">
							<div class="overlay">
								<h3 class="fontWhite">Prey</h3>
								<h2>Lorem ipsum dolor</h2>
								<p>
									<a href="#">Ver Mas</a>
								</p>
							</div>
						</div>
						<div class="col-sm-3 hovereffect">
							<img class="imgJuegos" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0KnIMijsLW3-Zjx32fR5nsep5uHH6hgYxoO83lcIFiOvrOnrp" alt="">
							<div class="overlay">
								<h3 class="fontWhite">Kingdom Rush</h3>
								<h2>Lorem ipsum dolors</h2>
								<p>
									<a href="#">Ver Mas</a>
								</p>
							</div>
						</div>
						<div class="col-sm-3 hovereffect">
							<img class="imgJuegos" src="https://hb.imgix.net/2e320cfc8f963eeec76b277fdcda709b9bf832ff.jpg?auto=compress,format&fit=crop&h=353&w=616&s=8e8941ae888d356771511ee558e35496" alt="">
							<div class="overlay">
								<h3 class="fontWhite">Moonlighter</h3>
								<h2>Lorem ipsum dolor</h2>
								<p>
									<a href="#">Ver Mas</a>
								</p>
							</div>
						</div>
						<div class="col-sm-3 hovereffect">
							<img class="imgJuegos" src="https://cdn.images.dailystar.co.uk/dynamic/184/photos/267000/620x/Stardew-Valley-Multiplayer-Release-Date-REVEALED-in-new-PS4-Xbox-Nintendo-Switch-update-682973.jpg" alt="">
							<div class="overlay">
								<h3 class="fontWhite">Terraria</h3>
								<h2>Lorem ipsum dolor </h2>
								<p>
									<a href="#">Ver Mas</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<div style="height: 400px;" class="row transBlack">				
				<div style="color: lightblue" class="col-sm-3">
					<h2 style="color: white; padding: 10px" class="" >Premium</h2>
					<h1><i style="font-size: 100px;" class="far fa-cart-arrow-down"></i></h1>
					<h5> Descuentos en todo tipo de articulos </h5>
					<br>
				</div>
				<div class="col-sm-3">
					Pruebas demo y acceso anticipado de nuestros productos

				</div>
				<div class="col-sm-3">
					
					100 Monedas de regalo para consumir en puestros productos
				</div>
				<div class="col-sm-3">
					
					Un autografo del Euricio
				</div>
			</div>
			<br>		
			<br>
			<div style="height: 400px" class="row transBlack">
				<h2 style="color: white; padding-left: 10px" class="" >Noticias</h2>
			</div>
			<br>		
			<br>

		</div>
