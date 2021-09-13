<?php $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion);

?>
<section class="paginacion">
    <ul>
        <?php if (pagina_actual() === 1) : ?>
        <li class="disabled">
            &laquo;
        </li>
        <?php else: ?>
        <li class="">
            <a href="<?php echo RUTA . '?p=' .pagina_actual() - 1;?>">
                &laquo;
            </a>
        </li>
        <?php endif; ?>
        <?php while ($i < $numero_paginas): ?>
            <?php if (pagina_actual() === $i + 1): ?>
            <!--<li class="disabled">
                <a href="#"></a>
            </li>-->
            <?php else: ?>
            <li class="">
                <a href="<?php echo RUTA . '?p=' . $i + 1 ; ?>"><?php echo $i + 1; ?></a>
            </li>
            <?php endif; ?>
        <?php $i++ ?>
        <?php endwhile; ?>
        <?php if (pagina_actual() == $numero_paginas): ?>
        <li class="disabled">
            &raquo;
        </li>
        <?php else: ?>
        <li class="">
            <a href="<?php echo RUTA . '?p=' .pagina_actual() + 1; ?>">
                &raquo;
            </a>
        </li>
        <?php endif; ?>
    </ul>
</section>
