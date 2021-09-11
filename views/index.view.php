<?php
require_once 'header.php';
?>

    <div class="container">

    <section class="section1">
        <?php foreach($posts as $post): ?>
        <article class="post">
            <h2 class="titulo"><a href="<?php echo RUTA . 'single.php' ?>"><?php echo $post['titulo']; ?></a></h2>
            <p class="fecha"><?php echo $post['fecha'] ?></p>
            <div class="thumb">
                <a href="<?php echo RUTA . 'single.php' ?>">
                    <img src="<?php echo RUTA; ?>img/<?php echo $post['thumb'] ?>" alt="">
                </a>
            </div>
            <p class="extracto">
                <?php echo $post['extracto']; ?>    
            </p>
            <a class="continuar" href="#">
                continuar leyendo...
            </a>
        </article>
        <?php endforeach; ?>        
    </section>

    <?php
    require_once 'aside.php';
    ?>

    </div>
    <?php require_once 'paginacion.php'; ?>
    <?php
    require_once 'footer.php';
    ?>