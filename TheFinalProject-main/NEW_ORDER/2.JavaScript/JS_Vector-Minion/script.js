var colorinchi = 'cyan';
var colorCuerpo='#FFE91F';
var colorOjo='white';
var colorpupila='black';
var colorboca='black';
var colorreflejo='rgba(255,255,255,0.8)';

function cambiar(){
    document.getElementById('cuerpo').style.fill=colorinchi;
    document.getElementById('pupila').style.fill=colorinchi;
    document.getElementById('ojo').style.fill=colorinchi;
    document.getElementById('ojo').style.stroke=colorinchi;
    document.getElementById('boca').style.fill=colorinchi;
    document.getElementById('reflejo').style.fill=colorinchi;
}

function reset(){
    document.getElementById('cuerpo').style.fill=colorCuerpo;
    document.getElementById('pupila').style.fill=colorpupila;
    document.getElementById('ojo').style.fill=colorOjo;
    document.getElementById('ojo').style.stroke='black';
    document.getElementById('boca').style.fill=colorboca;
    document.getElementById('reflejo').style.fill=colorreflejo;

/* Grosor de trazo */
document.getElementById('cuerpo').style.strokeWidth='none';
document.getElementById('pupila').style.strokeWidth='none';
document.getElementById('ojo').style.strokeWidth='6px';
document.getElementById('boca').style.strokeWidth='none';
document.getElementById('reflejo').style.strokeidth='none';

document.getElementById('cuerpo').style.width='223';
document.getElementById('cuerpo').style.height='538';

}

function cambiar2(){
    document.getElementById('cuerpo').style.fill='none';
    document.getElementById('pupila').style.fill='none';
    document.getElementById('ojo').style.fill='none';
    document.getElementById('boca').style.fill='none';
    document.getElementById('reflejo').style.fill='none';
/* Color de trazo */
document.getElementById('cuerpo').style.stroke='black';
document.getElementById('pupila').style.stroke='black';
document.getElementById('ojo').style.stroke='black';
document.getElementById('boca').style.stroke='black';
document.getElementById('reflejo').style.stroke='black';

/* Grosor de trazo */
document.getElementById('cuerpo').style.strokeWidth='6px';
document.getElementById('pupila').style.strokeWidth='6px';
document.getElementById('ojo').style.strokeWidth='6px';
document.getElementById('boca').style.strokeWidth='6px';
document.getElementById('reflejo').style.strokeidth='6px';

}




function cambiar3(){
    colorCuerpo = document.getElementById('colorPiker').value;
    document.getElementById('cuerpo').style.fill=colorCuerpo;
}



function gordo(){
    var gordo = document.getElementById('gordura').value;
    var alto = document.getElementById('altura').value;

    document.getElementById('cuerpo').style.width=gordo;
    document.getElementById('cuerpo').style.height=alto;



}