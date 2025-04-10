
let item ='';

for(let i=0; i< data.length-1; i++){

  item+='<li>';
  item+='<a href="'+data[i][3]+'" target="_blank">';
  item+='<img src="assets/img/'+data[i][2]+'" alt="">';
  item+='<div class="text">';
  item+='<h3>'+data[i][0]+'</h3>';
  item+='<p>'+data[i][1]+'</p>';
  item+='</div>';
  item+='</a>';
  item+='<ul class="tags">';

  for(let ii=0; ii< data[i][4].length; ii++){
    item+='<li class="'+data[i][4][ii]+'"></li>';
  }

  item+='</ul>';
  item+='</li>';

}

document.getElementById('galeria').innerHTML=item;
console.log(item);


