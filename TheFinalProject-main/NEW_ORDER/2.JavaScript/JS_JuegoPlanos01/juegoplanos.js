let fotos=[
    'primerisimoprimerplano.jpg',
    'primerplano.jpg',
    'planomedio.jpg',
    'planoamericano.jpg',
    'planogeneral.jpg'
];

let planos=[
    'Primerísmo Primer Plano',
    'Primer Plano',
    'Plano Medio',
    'Plano Americano',
    'Plano General'
]



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
    plano = random(0, fotos.length-1);
    document.getElementById('imagenPlano').src="img/"+fotos[plano];
    document.getElementById('btnSiguiente').style.display='none';
    document.getElementById('btnComprobar').style.display='block';
    document.getElementById('opciones').style.display='block';
    document.getElementById('texto').innerHTML="Elije un tipo de plano en el desplegable y pulsa comprobar.";
    
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

    mitexto += "has elegido <strong>"+planos[respuesta]+"</strong> y el plano mostrado es <strong>"+planos[plano]+"</strong>.";

    document.getElementById('texto').innerHTML=mitexto;
    document.getElementById('marcador').innerHTML=puntuacion+" puntos de "+turnos+" turnos.";
    document.getElementById('btnSiguiente').style.display='block';
    document.getElementById('btnComprobar').style.display='none';
    document.getElementById('opciones').style.display='none';

}

 siguiente();
