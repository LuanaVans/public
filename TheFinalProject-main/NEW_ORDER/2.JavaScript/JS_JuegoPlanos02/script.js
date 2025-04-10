let planos = [
    "planodetalle.png",
    "primerisimoprimerplano.png",
    "primerplano.png",
    "planomedio.png",
    "planoamericano.png",
    "planogeneral.png",
    "granplanogeneral.png"
];


let tipos=[
    "Plano detalle",
    "Primerísimo primer plano",
    "Primer Plano",
    "Plano Medio",
    "Plano Americano",
    "Plano General",
    "Gran Plano general"
];


// valor seleccionado
let valor;

// valor imagen cargada
let imagen;

// almacena los puntos
let puntos=0;
// almacena las veces
let veces=0;

function random(min, max) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
  }


function cargarImg(){
    console.log("Hola mundo");
    let aleatorio = random(0, planos.length-1);
    console.log(aleatorio);

    imagen = aleatorio;
    document.getElementById('foto').src="img/"+planos[aleatorio];
    document.getElementById("foto").style.animation = "aparicion 3s 1";

}


function comprobar(){
    let texto="";
    let seleccionado = document.getElementsByName('p1');
              
    for(i = 0; i < seleccionado.length; i++) {
        if(seleccionado[i].checked){
        valor = seleccionado[i].value;
        }
    }


    if(tipos[valor] == tipos[imagen]){
        texto+="Has elegido Sabiamente!<br> ";
        puntos++;
        document.getElementById("marcador").innerHTML=puntos+" Puntos de "+veces+" Intentos.";
        document.getElementById('eleccion').style.display="block";
        document.getElementById('eleccion').src="img/bien.gif";

    }
    else{
        texto="Has elegido Mal.<br> ";
        document.getElementById('eleccion').style.display="block";
        document.getElementById('eleccion').src="img/mal.gif";
    }

texto +="Has seleccionado <strong>"+ tipos[valor]+"</strong>, y la respusta corecta es: <strong>"+ tipos[imagen]+"</strong>";

document.getElementById("resultado").innerHTML=texto;

// oculta el botón comprobar
document.getElementById('btnComprobar').style.display='none';

// muestra el botón siguiente
document.getElementById('btnSiguiente').style.display='block';

}

// resetear el juego
function siguiente(){
    veces++;
    document.getElementById('btnSiguiente').style.display='none';
    cargarImg();
    document.getElementById('eleccion').style.display="none";
    document.getElementById("foto").style.animation = "aparicion 3s 1";



    // oculta el botón comprobar
document.getElementById('btnComprobar').style.display='block';

document.getElementById("resultado").innerHTML="Selecciona una opción.";

document.getElementById("marcador").innerHTML=puntos+" Puntos de "+veces+" Intentos.";

}

// lanzar juego la primera vez que se carga la página
siguiente();