function touchMove(event) {
	var x = event.touches[0].clientX;
	var y = event.touches[0].clientY;
	move(x, y);
}

function mouseMove() {
	let x = event.clientX;
	let y = event.clientY;
	move(x, y);
}

function move(x, y) {
	document.getElementById("demo").innerHTML = x + ", " + y;
	document.getElementById("mario").style.transform =
		"translateZ(200px) rotateX(" +
		y * -0.17 +
		"deg) rotateY(" +
		x * 0.17 +
		"deg)";
}