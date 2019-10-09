var vidaMaxima=150;
var vidaMinima=85;

var turnoActual=0;

var puntosDisponibles = 10;

var actor_pricipal = {
	nombre: "jugadorUno",
	identificador: 0,
	vida: 120,
	curacion: 3,
	daño: 3,
	critico: 1,
	equipo: 1,
	orden: 0,
	turnoP: 0
}

var actor_secundario = {
	nombre: "jugadorDos",
	identificador: 1,
	vida: 120,
	curacion: 3,
	daño: 4,
	critico: 2,
	equipo: 1,
	orden: 2,
	turnoP: 1
}

var actor_terciario = {
	nombre: "jugadorTres",
	identificador: 2,
	vida: 130,
	curacion: 1,
	daño: 3,
	critico: 1,
	equipo: 1,
	orden: 4,
	turnoP: 2
}

var plantilla_enemigo1 = {
	nombre: "enemigo1",
	identificador: 3,
	vida: Math.floor((Math.random() * (vidaMaxima - vidaMinima))+vidaMinima),
	curacion: Math.floor((Math.random() * (4 - 1))+1),
	daño: Math.floor((Math.random() * (4 - 2))+2),
	critico: Math.floor((Math.random() * (2 - 1))+1),
	equipo: 2,
	orden: 1,
	turnoP: 3
}

var plantilla_enemigo2 = {
	nombre: "enemigo2",
	identificador: 4,
	vida: Math.floor((Math.random() * (vidaMaxima - vidaMinima))+vidaMinima),
	curacion: Math.floor((Math.random() * (4 - 1))+1),
	daño: Math.floor((Math.random() * (4 - 2))+2),
	critico: Math.floor((Math.random() * (2 - 1))+1),
	equipo: 2,
	orden: 3,
	turnoP: 3
}

var plantilla_enemigo3 = {
	nombre: "enemigo3",
	identificador: 5,
	vida: Math.floor((Math.random() * (vidaMaxima - vidaMinima))+vidaMinima),
	curacion: Math.floor((Math.random() * (4 - 1))+1),
	daño: Math.floor((Math.random() * (4 - 2))+2),
	critico: Math.floor((Math.random() * (2 - 1))+1),
	equipo: 2,
	orden: 5,
	turnoP: 3
}


var turno = 0;
var rondasSuperadas = 0;
var enemigosEliminados = 0;

// agregar botón para reiniciar combateautomatico3



function mostrar_info()
{
	document.getElementById('vida1').innerHTML = actor_pricipal["vida"];
	document.getElementById('vida2').innerHTML = actor_secundario["vida"];
	document.getElementById('vida3').innerHTML = actor_terciario["vida"];

	document.getElementById('ataque1').innerHTML = actor_pricipal["daño"];
	document.getElementById('ataque2').innerHTML = actor_secundario["daño"];
	document.getElementById('ataque3').innerHTML = actor_terciario["daño"];

	document.getElementById('critico1').innerHTML = actor_pricipal["critico"];
	document.getElementById('critico2').innerHTML = actor_secundario["critico"];
	document.getElementById('critico3').innerHTML = actor_terciario["critico"];

	document.getElementById('curacion1').innerHTML = actor_pricipal["curacion"];
	document.getElementById('curacion2').innerHTML = actor_secundario["curacion"];
	document.getElementById('curacion3').innerHTML = actor_terciario["curacion"];

	$('#vida4').html(plantilla_enemigo1["vida"]);
	$('#ataque4').html(plantilla_enemigo1["daño"]);
	$('#critico4').html(plantilla_enemigo1["critico"]);
	$('#curacion4').html(plantilla_enemigo1["curacion"]);

	$('#vida5').html(plantilla_enemigo2["vida"]);
	$('#ataque5').html(plantilla_enemigo2["daño"]);
	$('#critico5').html(plantilla_enemigo2["critico"]);
	$('#curacion5').html(plantilla_enemigo2["curacion"]);

	$('#vida6').html(plantilla_enemigo3["vida"]);
	$('#ataque6').html(plantilla_enemigo3["daño"]);
	$('#critico6').html(plantilla_enemigo3["critico"]);
	$('#curacion6').html(plantilla_enemigo3["curacion"]);
	$('#puntosDisponibles').html('puntos disponibles: ' + puntosDisponibles);

	//juntar el respawn de los 3 enemigos en una función y sacarlos de mostrar_info
	if(plantilla_enemigo1.vida <= 0){
		plantilla_enemigo1.vida = Math.floor((Math.random() * (vidaMaxima - vidaMinima))+vidaMinima);
		plantilla_enemigo1.curacion = Math.floor((Math.random() * (4 - 1))+1);
		plantilla_enemigo1.daño = Math.floor((Math.random() * (4 - 2))+2);
		plantilla_enemigo1.critico = Math.floor((Math.random() * (2 - 1))+1);
		console.log("se generó un enemigo nuevo usando la plantilla 1");
		document.getElementById('ganador').innerHTML = "Nuevo enemigo generado!";
		enemigosEliminados++;
	}

	if(plantilla_enemigo2.vida <= 0){
		plantilla_enemigo2.vida = Math.floor((Math.random() * (vidaMaxima - vidaMinima))+vidaMinima),
		plantilla_enemigo2.curacion = Math.floor((Math.random() * (4 - 1))+1);
		plantilla_enemigo2.daño = Math.floor((Math.random() * (4 - 2))+2);
		plantilla_enemigo2.critico = Math.floor((Math.random() * (2 - 1))+1);
		console.log("se generó un enemigo nuevo usando la plantilla 2");
		document.getElementById('ganador').innerHTML = "Nuevo enemigo generado!";
		enemigosEliminados++;
	}

	if(plantilla_enemigo3.vida <= 0){
		plantilla_enemigo3.vida = Math.floor((Math.random() * (vidaMaxima - vidaMinima))+vidaMinima),
		plantilla_enemigo3.curacion = Math.floor((Math.random() * (4 - 1))+1);
		plantilla_enemigo3.daño = Math.floor((Math.random() * (4 - 2))+2);
		plantilla_enemigo3.critico = Math.floor((Math.random() * (2 - 1))+1);
		console.log("se generó un enemigo nuevo usando la plantilla 3");
		document.getElementById('ganador').innerHTML = "Nuevo enemigo generado!";
		enemigosEliminados++;
	}

	//juntar la correción de la vida de los jugadores en una función (y la informacion)
	if(actor_pricipal.vida<0){
		actor_pricipal.vida = 0;
		document.getElementById('ganador').innerHTML = "Jugador 1 eliminado.";
	}


	if(actor_secundario.vida<0){
		actor_secundario.vida = 0;
		document.getElementById('ganador').innerHTML = "Jugador 2 eliminado.";
	}

	if(actor_terciario.vida<0){
		actor_terciario.vida = 0;
		document.getElementById('ganador').innerHTML = "Jugador 3 eliminado.";
	}

	// $(".vidaJ1").css("height", actor_pricipal["vida"]*2);
	// $(".vidaJ2").css("height", actor_secundario["vida"]*2);
	//color de los iconos cambian al hacer o recibir daño
}
mostrar_info();

function clase_personaje(clase, actor) {

}
$('#actor1').change(function() {
	var clase = $(this).val();
	switch (clase){
		case "caballero":
		$("#img1").attr({
			src: 'https://static.thenounproject.com/png/30912-200.png'
		});
		actor_pricipal.vida = 160;
		actor_pricipal.daño = 3;
		actor_pricipal.critico = 2;
		break;

		case "ginete":
		$("#img1").attr({
			src: 'https://static.thenounproject.com/png/56772-200.png'
		});
		actor_pricipal.critico = 5;
		actor_pricipal.vida = 120;
		actor_pricipal.daño = 3;
		break;

		case "gladiador":
		$("#img1").attr({
			src: 'https://static.thenounproject.com/png/1048864-200.png'
		});
		actor_pricipal.daño = 8;
		actor_pricipal.critico = 2;
		actor_pricipal.vida = 120;
		break;
	}
	mostrar_info();	
});

$('#actor2').change(function() {
	var clase = $(this).val();
	switch (clase){
		case "caballero":
		$("#img2").attr({
			src: 'https://static.thenounproject.com/png/30912-200.png'
		});
		actor_secundario.vida = 160;
		actor_secundario.daño = 3;
		actor_secundario.critico = 1;
		break;

		case "ginete":
		$("#img2").attr({
			src: 'https://static.thenounproject.com/png/56772-200.png'
		});
		actor_secundario.critico = 5;
		actor_secundario.vida = 120;
		actor_secundario.daño = 3;
		break;

		case "gladiador":
		$("#img2").attr({
			src: 'https://static.thenounproject.com/png/1048864-200.png'
		});
		actor_secundario.daño = 8;
		actor_secundario.critico = 1;
		actor_secundario.vida = 120;
		break;
	}
	mostrar_info();	
});

$('#actor3').change(function() {
	var clase = $(this).val();
	switch (clase){
		case "caballero":
		$("#img3").attr({
			src: 'https://static.thenounproject.com/png/30912-200.png'
		});
		actor_terciario.vida = 160;
		actor_terciario.daño = 3;
		actor_terciario.critico = 2;
		break;

		case "ginete":
		$("#img3").attr({
			src: 'https://static.thenounproject.com/png/56772-200.png'
		});
		actor_terciario.critico = 5;
		actor_terciario.vida = 120;
		actor_terciario.daño = 3;
		break;

		case "gladiador":
		$("#img3").attr({
			src: 'https://static.thenounproject.com/png/1048864-200.png'
		});
		actor_terciario.daño = 8;
		actor_terciario.critico = 2;
		actor_terciario.vida = 120;
		break;
	}
	mostrar_info();	
});

function mejorar_personaje(ranura, cantidad){
	if(puntosDisponibles>0 && cantidad > 0){
		switch (ranura){
			case "vida":
			actor_secundario.vida+=cantidad;
			break;

			case "daño":
			actor_secundario.daño+=cantidad;
			break;

			case "critico":
			actor_secundario.critico+=cantidad;
			break;
		}
		puntosDisponibles--;
	}else if(cantidad < 0){
		switch (ranura){
			case "vida":
			actor_secundario.vida+=cantidad;
			break;

			case "daño":
			actor_secundario.daño+=cantidad;
			break;

			case "critico":
			actor_secundario.critico+=cantidad;
			break;
		}
		puntosDisponibles++;
	}
	mostrar_info();
}

// function cambiarFondo() {
// 	var fondo1 = "https://www.lostnoob.com/images/darkest-dungeon/donjons/ruines.jpg";
// 	var fondo2 = "https://img4.goodfon.com/wallpaper/nbig/e/ee/darkest-dungeon-death-candles-swords-ruins-altar.jpg";
// 	var fondo3 = "https://steamcdn-a.akamaihd.net/steamcommunity/public/images/clans/7434629/6e0b6b578a86809494e65d36f76308c57a54052d.png";
// 	var fondo4 = "https://i.pinimg.com/originals/19/9b/8f/199b8fa0ea9809ef42a53074fb1e9504.png";
// 	var fondo5 = "https://steamuserimages-a.akamaihd.net/ugc/845964507751453442/497C510E20305B51E1E733E2F13CD1F54FAF302A/";
// 	var resultado = Math.random(fondo1, fondo2, fondo2, fondo3, fondo4, fondo5);
// 	$(".fondo").css("background-image", "url('resu')");
// }

function ataque3() //editar y reemplazar por switch, ordenar!
{
	if(turnoActual==6){
		turnoActual = 0;
		rondasSuperadas++;
	}
	if(turnoActual==0 || turnoActual==2 || turnoActual==4){
		var enemigo = Math.floor((Math.random() * (4 - 1))+1);

		var atacante;
		if (turnoActual == 0 && actor_pricipal.vida > 0){
			atacante = actor_pricipal;
		} else if (turnoActual == 2 && actor_secundario.vida > 0){
			atacante = actor_secundario;
		} else if (turnoActual == 4 && actor_terciario.vida > 0){
			atacante = actor_terciario;
		} else{
			atacante = null;
			turnoActual++;
		}

		// if (turnoActual == 0){
		// 	atacante = actor_pricipal;
		// } else if (turnoActual == 2){
		// 	atacante = actor_secundario;
		// } else {
		// 	atacante = actor_terciario;
		// }

		// Math.floor(Math.random() * (10 - 1)) + 1 <5 &&
		if(atacante != null && atacante.vida>0 && atacante.vida <= 40 &&  atacante.curacion >= 1)
		{
			curarse3(atacante);
			console.log(atacante.nombre+" se curó y pasó el turno.");
			//document.getElementById('ganador').innerHTML = atacante.nombre+" se curó y pasó el turno.";
		}else if(enemigo==1 && atacante != null){
			sacar_vida3(atacante,plantilla_enemigo1);
			console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+plantilla_enemigo1.nombre);
			//$('#vida1').css('color', 'red');
		}else if(enemigo == 2 && atacante != null){
			sacar_vida3(atacante,plantilla_enemigo2);
			console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+plantilla_enemigo2.nombre);
			//$('#vida2').css('color', 'red');
		}else if(enemigo == 3 && atacante != null){
			sacar_vida3(atacante,plantilla_enemigo3);
			console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+plantilla_enemigo3.nombre);
			//$('#vida3').css('color', 'red');
		}
		mostrar_info();
		turnoActual++;
	} else if(turnoActual==1 || turnoActual==3 || turnoActual==5){
		var enemigo1 = Math.floor((Math.random() * (4 - 1))+1);

		var atacante;
		if (turnoActual == 1){
			atacante = plantilla_enemigo1;
		} else if (turnoActual == 3){
			atacante = plantilla_enemigo2;
		} else {
			atacante = plantilla_enemigo3;
		}

		if(atacante.vida>0 && atacante.vida <= 40 &&  atacante.curacion >= 1)
		{
			curarse3(atacante);
			console.log(atacante.nombre+" se curó y pasó el turno.");
			//document.getElementById('ganador').innerHTML = atacante.nombre+" se curó y pasó el turno.";
		}else if(enemigo1==1){
			if(actor_pricipal.vida>0){
				sacar_vida3(atacante,actor_pricipal);
				console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+actor_pricipal.nombre);
			}else if(actor_secundario.vida>0){
				sacar_vida3(atacante,actor_secundario);
				console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+actor_secundario.nombre);
			}else if(actor_terciario.vida>0){
				sacar_vida3(atacante,actor_terciario);
				console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+actor_terciario.nombre);
			}
		}else if(enemigo1 == 2){
			if(actor_pricipal.vida>0){
				sacar_vida3(atacante,actor_secundario);
				console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+actor_secundario.nombre);
			}else if(actor_secundario.vida>0){
				sacar_vida3(atacante,actor_terciario);
				console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+actor_terciario.nombre);
			}else if(actor_terciario.vida>0){
				sacar_vida3(atacante,actor_pricipal);
				console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+actor_pricipal.nombre);
			}
		}else if(enemigo1 == 3){
			if(actor_pricipal.vida>0){
				sacar_vida3(atacante,actor_terciario);
				console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+actor_terciario.nombre);
			}else if(actor_secundario.vida>0){
				sacar_vida3(atacante,actor_pricipal);
				console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+actor_pricipal.nombre);
			}else if(actor_terciario.vida>0){
				sacar_vida3(atacante,actor_secundario);
				console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+actor_secundario.nombre);
			}
		}

		// }else if(enemigo1 == 2){
		// 	sacar_vida3(atacante,actor_secundario);
		// 	console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+actor_secundario.nombre);
		// }else if(enemigo1 == 3){
		// 	sacar_vida3(atacante,actor_terciario);
		// 	console.log("turno: "+turnoActual+" "+atacante.nombre+" dañó a "+actor_terciario.nombre);
		// }
		mostrar_info();
		turnoActual++;
	}
}

function curarse3(plantilla){
		plantilla.vida+=20;
		document.getElementById(plantilla.nombre).innerHTML = '<i style="color=green"class="fas fa-heartbeat"></i> '+"+20";
		plantilla.curacion--;
}

function sacar_vida3(atacante, defensor)
{
	if(atacante != null && defensor["vida"]>0){
		var daño = atacante["daño"]*atacante["critico"]+tirarDado();
		defensor["vida"] -= daño;
		document.getElementById(defensor.nombre).innerHTML = '<i style="color=green"class="fas fa-heartbeat"></i> '+"-"+daño;
		mostrar_info();
	}
}

var pausa = false;

function inicio_combate_automatico3(){
	
	var combate3v3 = setInterval(function arez(){ ataque3();
		if(actor_pricipal.vida<=0 && actor_secundario.vida<=0&&actor_terciario.vida<=0){
			console.log("DERROTA!");
			console.log("Rondas completadas: "+rondasSuperadas);
			console.log("Enemigos eliminados: "+enemigosEliminados+" ("+enemigosEliminados*3+")");
			console.log("Puntos conseguidos "+rondasSuperadas*enemigosEliminados*3);
			document.getElementById('ganador').innerHTML = "¡Derrota! Rondas superadas: "+rondasSuperadas+" ||| Enemigos eliminados: "+enemigosEliminados+" ||| Puntos conseguidos "+rondasSuperadas*enemigosEliminados*3;
			clearInterval(combate3v3);
		}
		if(pausa){
			clearInterval(combate3v3);
		}
	}, 50);
	
}

function pausar(){
	if(!pausa){
		pausa = true;
	}else{
		pausa = false;
	}
}

function tirarDado()
{
	return dado = Math.floor((Math.random()*10)+1);
}



// function sacar_vida(atacante, defensor, proximo)
// {
// 	if(defensor["vida"]>0 && atacante["turnoP"]== turno){
// 		defensor["vida"] -= atacante["daño"]*atacante["critico"]+tirarDado();
// 		mostrar_info();
// 		turno = proximo;
// 	}
// 	recargarBotones();
// 	ganador()
// }


// function curarse(numero, proximo)
// {
// 	if(numero["vida"]>0 && numero["vida"]<100 && numero["curacion"]>0 && numero["turnoP"]== turno)
// 	{
// 		numero["vida"] +=10;
// 		numero["curacion"]--;
// 		mostrar_info();
// 		turno = proximo;
// 	}
// 	if(numero["vida"]>100)
// 	{
// 		numero["vida"] = 100;
// 		mostrar_info();
// 	}
// 	recargarBotones();
// 	ganador()
// }


// function recargarBotones()
// {
// 	if(turno==0){
// 		$(".boton1").removeClass("btn-danger");
// 		$(".boton1").addClass("btn-success");

// 		$(".boton2").addClass("btn-danger");
// 		$(".boton2").removeClass("btn-success");
// 	}else if(turno==1){
// 		$(".boton1").removeClass("btn-success");
// 		$(".boton1").addClass("btn-danger");

// 		$(".boton2").addClass("btn-success");
// 		$(".boton2").removeClass("btn-danger");
// 	}
// }

// function ganador()
// {
// 	if(actor_secundario["vida"]<=0)
// 	{
// 		document.getElementById('ganador').innerHTML = "Jugador 1 gana la partida.";
// 		actor_secundario["vida"] = 0;
// 	}else if(actor_pricipal["vida"]<=0){
// 		document.getElementById('ganador').innerHTML = "Jugador 2 gana la partida.";
// 		actor_pricipal["vida"] = 0;
// 	}
// 	mostrar_info()
// }

// function iniciarCombate()
// {
// 	if(actor_pricipal.vida > 0 && actor_secundario.vida > 0){
// 		ataqueAutomatico();
// 	}else if(actor_pricipal.vida <= 0){
// 		console.log("Jugador 2 ganó");
// 	}else if(actor_secundario.vida <= 0){
// 		console.log("Jugador 1 ganó");
// 	}
// }

// function ataqueAutomatico()
// {
// 	if(turno==0){
// 		if(actor_pricipal.vida < 40 && Math.floor(Math.random() * (10 - 1)) + 1 <5){
// 			curarse(actor_pricipal, 1);
// 			document.getElementById('ganador').innerHTML = "Jugador 1 se curó.";
// 		}else{
// 			sacar_vida(actor_pricipal, actor_secundario, 1);
// 			mostrar_info();
// 		}
// 		setInterval(function(){
// 			iniciarCombate();
// 		}, 1000);
		
		
// 	}else if(turno==1){
// 		if(actor_secundario.vida < 40 && Math.floor(Math.random() * (10 - 1)) + 1 <5){
// 			curarse(actor_secundario, 0);
// 			document.getElementById('ganador').innerHTML = "Jugador 2 se curó.";
// 		}else{
// 			sacar_vida(actor_secundario, actor_pricipal, 0);
// 			mostrar_info();
// 		}
// 		setInterval(function(){
// 			iniciarCombate();
// 		}, 1000);
// 	}
// }

// function reiniciar()
// {	actor_pricipal.vida= 100;
// 	actor_pricipal.curacion= 3;

// 	actor_secundario.vida= 100;
// 	actor_secundario.curacion= 2;
// 	mostrar_info();
// }