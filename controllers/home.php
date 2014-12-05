<?php
	$titulo = "Bienvenidos a Home";
	$contenido ='Desglosar nuestra misión';
	
	$variables = array('titulo' => $titulo,
		'contenido' => $contenido);

	view('home',$variables);
?>