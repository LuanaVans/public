
# Documentación

## llamadas include

Las llamadas de tipo include son para insertar un fragmento de código que se encuentra en otro archivo.

Un ejemplo de include típico en php sería algo así:

```
<? include "carpeta/archivo.php" ?>
```
Donde el contenido del archivo ***archivo.php*** que se encuentra en la carpeta **carpeta** se incrustaría o incluiría en el lugar donde figura el framento de código.

Habitualmente estos includes se utilzan para hacer la carga del:
- **header** con todo el material de inicio de código html así como el comienzo del contenido del body

- **footer** con todo el contenido de la etqiqueta <footer> de html y el cierre del body y html

En nuestro sistema para realizar estas cargas se utilizará la función:

```` 
incluir();
````

Esta función realiza la carga de un archivo externo como por ejemlo lo puede ser **header**, **footer** o **asside**

````
<? incluir('header'); ?> // carga header.php
<? incluir('asside'); ?> // carga asside.php
<? incluir('footer'); ?> // carga footer.php
````



Disponible desde la versión 0.1

### Navegadores que lo soportan:

| Chrome | Edge | Firefox | Opera|
|--------|------|---------|------|
|       1|    12|   8     |  32  |
| ![logo chrome](https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Google_Chrome_icon_%28February_2022%29.svg/600px-Google_Chrome_icon_%28February_2022%29.svg.png)   |      |          |    |

