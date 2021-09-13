<?php 
    require_once 'header.php';
?>
<div class="container">

    <section class="articuloSingle">
        <h2 class="titulo"><span><?php echo $post['titulo'] ?></span></h2>
        <div class="thumb">
            <span>
                <img src="<?php echo RUTA; ?>img/<?php echo $post['thumb']; ?>" alt="">
            </span>
        </div>
        <p class="fecha"><?php echo $post['fecha']; ?></p>
        <p class="articuloContenido">
            <?php echo nl2br($post['texto']); ?>
        </p>
    </section>
    
    <?php 
        require_once 'aside.php';
    ?>

</div>

<?php 
    require_once 'footer.php' ;
?>