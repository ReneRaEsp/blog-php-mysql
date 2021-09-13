<?php

    require_once '../views/header.php';

?>

    <div class="container">
    
    <section class="section1">
    <h2>Panel de control</h2>
        <?php foreach ($posts as $post): ?>
        <article class="post">
            <h2 class="titulo"><?php echo $post['id'] . '.-' . $post ?></h2>
            <a href="#">Editar</a>
            <a href="#">Ver</a>
            <a href="#">Borrar</a>
        </article>
        <?php endforeach; ?>        
    </section>

    </div>
    <?php 
        
        require_once '../views/paginacion.php'; 

        require_once '../views/footer.php';
        
    ?>