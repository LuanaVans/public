// esto lista en un array multidimensinal los tipos de planos
let superPlanos=[
    ['primerisimoprimerplano.jpg',      'Primerísmo Primer Plano' ,      'Encuadre muy cercano que enfoca un detalle'],
    ['primerplano.jpg',                 'Primer Plano' ,                 'Plano que encuadra un elemento importante'],
    ['planomedio.jpg',                  'Plano Medio' ,                  'Encuadre reslizado desde la cintura hasta la cabeza'],
    ['planoamericano.jpg',              'Plano Americano',               'Plano que encuadra esde la rodilla hasta la cabeza'],
    ['planogeneral.jpg',                'Plano General',                 'Plano que encuadra el contexto general de la escena']
];



// numero de plano que va a salir en pantalla
let plano=0;

// almacenar respuesta jugador
let respuesta="";


// variable que acumula la puntuación optenida
let puntuacion=0;

// variable que acumula el turno en el que nos encontremos
let turnos=0;

// devuelve un número aleatorio entre los atributos minimo y maximo que le pasemos a la función
function random(min, max) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
  }

 function siguiente(){
    plano = random(0, superPlanos.length-1);
    document.getElementById('imagenPlano').src="img/"+superPlanos[plano][0];
    document.getElementById('btnSiguiente').style.display='none';
    document.getElementById('btnComprobar').style.display='block';
    document.getElementById('opciones').style.display='block';
    document.getElementById('texto').innerHTML="Elije un tipo de plano en el desplegable y pulsa comprobar para empezar a jugar.";
    document.getElementById('descripcion').innerHTML="";
    
    turnos++;
    document.getElementById('marcador').innerHTML=puntuacion+" puntos de "+turnos+" turnos.";

 } 


function comprobar(){
    respuesta = document.getElementById('opciones').value;

    let mitexto="";

    if(respuesta == plano){
        mitexto += "<span class='v'>Correcto</span>, ";
        puntuacion++;
    }

    else{
        mitexto += "<span class='r'>Incorrecto</span>, ";
        puntuacion--;
    }

    mitexto += "has elegido <strong>"+superPlanos[respuesta][1]+"</strong> y el plano mostrado es <strong>"+superPlanos[plano][1]+"</strong>.";

    document.getElementById('texto').innerHTML=mitexto;
    document.getElementById('marcador').innerHTML=puntuacion+" puntos de "+turnos+" turnos.";
    document.getElementById('descripcion').innerHTML="<h2>"+superPlanos[plano][1]+"</h2> <p>"+superPlanos[plano][2]+"</p>";
    document.getElementById('btnSiguiente').style.display='block';
    document.getElementById('btnComprobar').style.display='none';
    document.getElementById('opciones').style.display='none';
}

//lanza la función siguiente para generar una imagen aleatoria y empezar a jugar
 siguiente();
