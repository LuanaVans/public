<?php

class Formulario {
    private $campos;
    
    public function __construct() {
        $this->campos = array();
    }
    
    public function agregarCampo($nombre, $etiqueta, $tipo, $opciones = array(), $requerido = false) {
        $campo = array(
            'nombre' => $nombre,
            'etiqueta' => $etiqueta,
            'tipo' => $tipo,
            'opciones' => $opciones,
            'requerido' => $requerido
        );
        
        $this->campos[] = $campo;
    }
    
    public function generarFormulario() {
        echo "<form>";
        
        foreach ($this->campos as $campo) {
            echo "<div>";
            echo "<label for='" . $campo['nombre'] . "'>" . $campo['etiqueta'] . "</label>";
            
            switch ($campo['tipo']) {
                case 'texto':
                case 'numero':
                case 'password':
                    echo "<input type='" . $campo['tipo'] . "' name='" . $campo['nombre'] . "'";
                    break;
                case 'checkbox':
                case 'radio':
                    foreach ($campo['opciones'] as $opcion) {
                        echo "<label>";
                        echo "<input type='" . $campo['tipo'] . "' name='" . $campo['nombre'] . "' value='" . $opcion . "'>";
                        echo $opcion;
                        echo "</label>";
                    }
                    break;
                case 'textarea':
                    echo "<textarea name='" . $campo['nombre'] . "'></textarea>";
                    break;
            }
            
            if ($campo['requerido']) {
                echo " required";
            }
            
            echo ">";
            echo "</div>";
        }
        
        echo "<button type='submit'>Enviar</button>";
        echo "</form>";
    }
}

// Crear objeto de la clase Formulario
$formulario = new Formulario();

// Agregar campos al formulario
$formulario->agregarCampo('nombre', 'Nombre', 'texto', array(), true);
$formulario->agregarCampo('edad', 'Edad', 'numero');
$formulario->agregarCampo('password', 'Contraseña', 'password', array(), true);
$formulario->agregarCampo('intereses', 'Intereses', 'checkbox', array('Deportes', 'Música', 'Cine'));
$formulario->agregarCampo('genero', 'Género', 'radio', array('Masculino', 'Femenino', 'Otro'));
$formulario->agregarCampo('comentarios', 'Comentarios', 'textarea');

// Generar el formulario
$formulario->generarFormulario();

?>
