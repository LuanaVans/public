let mode = 0;
// mode = 0 -> 2d

function aaa(){
    
    if(mode == 0){
        document.getElementById("head").className = "mode3d";
        mode=1;
        console.log("mode3d");
        document.getElementById("deslizador").value=70;

    }

    else{
        document.getElementById("head").className = "mode2d";
        
        mode=0;
        console.log("mode2d");

    }

    console.log(mode);
}



let valor=58;

function rotate3d(){
    let valor = document.getElementById("deslizador").value;
    document.getElementById("head").style.transform = "rotateY("+valor+"deg)";
}


function girar3d(event){
        let x = event.clientX;
        let y = event.clientY;
        let coor = "X: " + x + ", Y: " + y;
        document.getElementById("demo").innerHTML = coor;

        if(mode==1){
        document.getElementById("head").style.transform = " rotateY("+(x*1.5)+"deg)";
        }

    }