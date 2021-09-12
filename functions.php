<?php


function conexion ($bd_config) {
    try {
        //$host = 'us-cdbr-east-04.cleardb.com';
        $host = 'localhost';
        $conexion = new PDO("mysql:host=$host;dbname=" . $bd_config['database'] , $bd_config['user'], $bd_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function limpiarDatos($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function pagina_actual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1 ;
}

function obtener_posts($post_por_pagina, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
    $sentencia =  $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
    $sentencia->execute();    
    return $sentencia->fetchAll();
}

function obtener_post_por_id($conexion, $id){
    $resultado =  $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function id_articulo($id){
    return (int)limpiarDatos($id);
}


?>