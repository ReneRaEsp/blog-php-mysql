<?php session_start();
// Archivo index del admin

require_once 'config.php';

require_once '../functions.php';

$conexion = conexion($bd_config);

if (!$conexion){
    header('Location: ../error.php');
}

$posts = obtener_posts($blog_config['post_por_pagina'], $conexion);



require_once '../views/admin_index.view.php';

?>