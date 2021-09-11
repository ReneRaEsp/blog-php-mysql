<?php

require_once 'admin/config.php';
require_once 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion){
   header('Location: error.php');
} else {
   //echo 'Conectado';
}

$posts = obtener_posts($blog_config['post_por_pagina'], $conexion);

require_once 'aside.view.php';

?>