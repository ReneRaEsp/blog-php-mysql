<?php session_start();
require_once 'config.php';
require_once '../function.php';

$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}

comprobarSession();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);

    $texto = nl2br($_POST['texto']);
    $id = limpiarDatos($_POST['id']);
    
}