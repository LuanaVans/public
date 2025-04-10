const e1 = document.getElementById("galeria");
const e2= document.getElementById("btn_cambiar");

function cambiar(){
    if (e1.className == "list") {
      e1.className = "grid";
      e2.innerText="Modo Lista";
    } else {
      e1.className = "list";
      e2.innerText="Modo Retícula";
    }
  }


  cambiar();


function lista(){ 
  document.getElementById('galeria').className="lista";
}

function cuadricula(){ 
  document.getElementById('galeria').className="cuadricula";
}

