<?php 

require_once 'admin/config.php';
require_once 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion){
   header('Location: error.php');
   //echo 'no conectado';
} else {
    //echo 'Conectado';
}


pagina_actual();
$posts = obtener_posts($blog_config['post_por_pagina'], $conexion);

if(!$posts){
    header('Location: error.php');
}


require_once 'views/index.view.php';

?>