<aside class="sidebar">    
        <?php foreach($posts as $post): ?>
        <article class="sidePost">
            <div class="sideThumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>img/<?php echo $post['thumb']; ?>" alt="">
                </a>
            </div>
            <div class="sideRight">
                <h2 class="sideTitulo"><?php echo $post['titulo']; ?></h2>
                <p class="sideExtracto">
                    <?php echo $post['extracto']; ?>  
                </p>
            </div>
        </article>
        <?php endforeach; ?>
    </aside>