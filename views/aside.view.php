<aside class="sidebar">    
        <?php foreach($posts as $post): ?>
        <article class="sidePost">
            <div class="sideThumb">
                <a href="<?php
                    echo RUTA . 'single.php?id=' . $post['id'];
                ?>">
                    <img src="<?php echo RUTA; ?>img/<?php echo $post['thumb']; ?>" alt="">
                </a>
            </div>
            <div class="sideRight">
                <h2 class="sideTitulo"><a href="<?php
                    echo RUTA . 'single.php?id=' . $post['id'];
                ?>"><?php echo $post['titulo']; ?></a></h2>
                <p class="sideExtracto">
                    <?php echo $post['extracto']; ?>  
                </p>
            </div>
        </article>
        <?php endforeach; ?>
    </aside>