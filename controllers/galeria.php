<?php
$titulo = "Bienvenidos a la Galeria";
$contenido ='Desplazarse a la Galeria';

$variables = array('titulo' => $titulo,
    'contenido' => $contenido);

view('galeria',$variables);
?>