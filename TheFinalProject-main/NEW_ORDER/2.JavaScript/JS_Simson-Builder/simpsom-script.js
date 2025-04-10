let ojos = [
    'eyes0.png',
    'eyes1.png',
    'eyes2.png',
    'eyes3.png',
    'eyes4.png',
    'eyes5.png',
    'eyes6.png',
    'eyes7.png',
    'eyes8.png',
    'eyes9.png',
    'eyes10.png',
    'eyes11.png',
    'eyes12.png',
    'eyes13.png',
    'eyes14.png',
    'eyes15.png',
    'eyes16.png',
    'eyes17.png',
    'eyes18.png',
    'eyes19.png'
 
]

let bocas = [
    'mouth0.png',
    'mouth1.png',
    'mouth2.png',
    'mouth3.png',
    'mouth4.png',
    'mouth5.png',
    'mouth6.png',
    'mouth7.png',
    'mouth8.png',
    'mouth9.png',
    'mouth10.png',
    'mouth11.png',
    'mouth12.png',
    'mouth13.png',
    'mouth14.png',
    'mouth15.png',
    'mouth16.png',
    'mouth17.png',
    'mouth18.png',
    'mouth19.png',
    'mouth20.png',
    'mouth21.png',
    'mouth22.png',
    'mouth23.png',
    'mouth24.png',
    'mouth25.png',
    'mouth26.png',
    'mouth27.png',
    'mouth28.png',
    'mouth29.png',
    'mouth30.png',
    'mouth31.png',
    'mouth32.png',
    'mouth34.png',
    'mouth35.png',
    'mouth36.png',
    'mouth37.png',
    'mouth38.png'
    
]

let cabezas = [
    'head0.png',
    'head1.png',
    'head2.png',
    'head3.png',
    'head4.png',
    'head5.png',
    'head6.png',
    'head7.png',
    'head8.png',
    'head9.png',
    'head10.png',
    'head11.png',
    'head12.png',
    'head13.png',
    'head14.png',
    'head15.png',
    'head16.png',
    'head17.png',
    'head18.png',
    'head19.png',
    'head20.png',
    'head21.png',
    'head22.png',
    'head23.png',
    'head24.png'
     
]

let n_ojos = 0;
let n_bocas = 0;
let n_cabezas = 0;


function ojo() {
    if (n_ojos < ojos.length - 1) {
        n_ojos++;
    } else {
        n_ojos = 0;
    }
    document.getElementById('ojos').style.backgroundImage = "url('img/" + ojos[n_ojos] + "')";
}

function boca() {
    if (n_bocas < bocas.length - 1) {
        n_bocas++;
    } else {
        n_bocas = 0;
    }
    document.getElementById('boca').style.backgroundImage = "url('img/" + bocas[n_bocas] + "')";

}

function cabeza() {
    if (n_cabezas < cabezas.length - 1) {
        n_cabezas++;
    } else {
        n_cabezas = 0;
    }
    document.getElementById('cabeza').style.backgroundImage = "url('img/" + cabezas[n_cabezas] + "')";
    console.log("img/" + cabezas[0]);
}

function aleatorio() {
    document.getElementById('ojos').style.backgroundImage = "url('img/" + ojos[random(0, ojos.length - 1)] + "')";
    document.getElementById('boca').style.backgroundImage = "url('img/" + bocas[random(0, bocas.length - 1)] + "')";
    document.getElementById('cabeza').style.backgroundImage = "url('img/" + cabezas[random(0, cabezas.length - 1)] + "')";
}

function hue() {
    let mitono = document.getElementById('tono').value;
    document.getElementById('cabeza').style.filter = "hue-rotate(" + mitono+ "deg)";
}


function random(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}


aleatorio();