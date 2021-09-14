<?php

    require_once '../views/header.php';

?>
    <div class=" container admin">
    
    <section class="section1">
    <h2>Panel de control</h2>
    <a class="nuevoPost" href="nuevo.php">Nuevo Post</a>
        <?php foreach ($posts as $post): ?>
            
        <article class="post">
            <h2 class="titulo"><?php echo $post['id'] . '.-' . $post['titulo'] ?></h2>
            <a href="editar.php?id=<?php echo $post['id']; ?>">Editar</a>
            <a href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
            <a href="borrar.php?id=<?php echo $post['id']; ?>">Borrar</a>
        </article>
        <?php endforeach; ?>        
    </section>

    </div>
    <?php 
        
        require_once '../views/paginacion.php'; 

        require_once '../views/footer.php';
        
    ?>