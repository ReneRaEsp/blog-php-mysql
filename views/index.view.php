<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, 
    user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/style.css">
    <title>Blog</title>
</head>
<body>
    <header class="header">
        <div class="logo izquierda">
            <p><a href="#">Ramsolutions<br> Blog</a></p>
        </div>
        <div class="derecha">
            <form 
                name="busqueda" class="buscar"
                action="<?php echo RUTA; ?>/buscar.php"
                method="get"
                >
                <input type="text" name="busqueda" placeholder="Buscar">
                <button type="submit" class="icono fa fa-search"></button>
            </form>
            <nav class="menu">
                <ul>
                    <li>
                        <a href="#">
                            <i
                            class="fab fa-twitter"
                            ></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i
                            class="fab fa-facebook"
                            ></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">

    <section class="section1">
        <article class="post">
            <h2 class="titulo">Titulo</h2>
            <p class="fecha">1 de Enero de 2021</p>
            <div class="thumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>img/img1.jpg" alt="">
                </a>
            </div>
            <p class="extracto">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat et, facere aliquid ducimus qui dolores libero reiciendis cumque quos sed nihil nesciunt earum iste neque repellendus necessitatibus atque magni accusamus?
            </p>
            <a class="continuar" href="#">
                continuar leyendo...
            </a>
        </article>
        <article class="post">
            <h2 class="titulo">Titulo</h2>
            <p class="fecha">1 de Enero de 2021</p>
            <div class="thumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>img/img1.jpg" alt="">
                </a>
            </div>
            <p class="extracto">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat et, facere aliquid ducimus qui dolores libero reiciendis cumque quos sed nihil nesciunt earum iste neque repellendus necessitatibus atque magni accusamus?
            </p>
            <a class="continuar" href="#">
                continuar leyendo...
            </a>
        </article>
        
    </section>

    <aside class="sidebar">
        <article class="sidePost">
            <div class="sideThumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>img/img2.jpg" alt="">
                </a>
            </div>
            <div class="sideRight">
                <h2 class="sideTitulo">Titulo</h2>
                <p class="sideExtracto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores incidunt laborum sequi fuga assumenda quod eius
                </p>
            </div>
        </article>
        <article class="sidePost">
            <div class="sideThumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>img/img2.jpg" alt="">
                </a>
            </div>
            <div class="sideRight">
                <h2 class="sideTitulo">Titulo</h2>
                <p class="sideExtracto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores incidunt laborum sequi fuga assumenda quod eius
                </p>
            </div>
        </article>
        <article class="sidePost">
            <div class="sideThumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>img/img2.jpg" alt="">
                </a>
            </div>
            <div class="sideRight">
                <h2 class="sideTitulo">Titulo</h2>
                <p class="sideExtracto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores incidunt laborum sequi fuga assumenda quod eius
                </p>
            </div>
        </article>
        <article class="sidePost">
            <div class="sideThumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>img/img2.jpg" alt="">
                </a>
            </div>
            <div class="sideRight">
                <h2 class="sideTitulo">Titulo</h2>
                <p class="sideExtracto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores incidunt laborum sequi fuga assumenda quod eius
                </p>
            </div>
        </article>
        <article class="sidePost">
            <div class="sideThumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>img/img2.jpg" alt="">
                </a>
            </div>
            <div class="sideRight">
                <h2 class="sideTitulo">Titulo</h2>
                <p class="sideExtracto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores incidunt laborum sequi fuga assumenda quod eius
                </p>
            </div>
        </article>
        <article class="sidePost">
            <div class="sideThumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>img/img2.jpg" alt="">
                </a>
            </div>
            <div class="sideRight">
                <h2 class="sideTitulo">Titulo</h2>
                <p class="sideExtracto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores incidunt laborum sequi fuga assumenda quod eius
                </p>
            </div>
        </article>
    </aside>

    </div>
    <footer class="footer">

    </footer>
</body>
</html>