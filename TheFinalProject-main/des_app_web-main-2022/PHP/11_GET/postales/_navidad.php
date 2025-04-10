<link rel="stylesheet" href="css/navidad.css">

<head>
  <title>Postal de Felicitaciones</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="postal">
    <div class="columna-izquierda">
      <h1></h1>
    </div>
    <div class="columna-derecha">
      <h1>FELIZ <br> NAVIDAD</h1>
      <p>Querido/a <span id="nombre"><?php echo $nombre?></span>,</p>
      <pre>
      <?php echo $texto?></pre>
    </div>
  </div>
  
    <div class="cont" id="cont">
    <canvas id="space" width="300" height="300"></canvas>
  </div>

</body>
</html>

