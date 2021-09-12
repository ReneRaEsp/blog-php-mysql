<?php

define('RUTA', 'http://localhost/blog/');
/*  BD Produccion
$bd_config = array(
    'database' => 'heroku_8d9e722ab58ceb6',
    'user' => 'b0526ccb9ea09d',
    'pass' => '337b8657'
);*/

$bd_config = array(
    'database' => 'blog',
    'user' => 'root',
    'pass' => ''
);

$blog_config =  array(
    'post_por_pagina' => '3',
    'post_por_pagina_aside' => '4',
    'carpeta_imagenes' => 'img/'
);

$blog_admin = array(
    'usuario' => 'Rene',
    'password' => 'Prajnaparamita%$777$%'
);

?>