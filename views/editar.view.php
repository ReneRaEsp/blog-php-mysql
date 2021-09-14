<?php require_once 'header.php' ?>

<div class="editar">
    <h2>Editar Articulo</h2>
    <form method="post" class="formulario"
     enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="hidden" 
               value="<?php echo $post['id']; ?>" name="id">

        <input type="text" name="titulo" 
               placeholder="Titulo del Articulo" 
               value="<?php echo $post['titulo']; ?>">

        <input type="text" name="extracto" 
                placeholder="Extracto" value="<?php echo $post['extracto']; ?>">

        <textarea name="texto" >
            <?php echo $post['texto']; ?>
        </textarea>

        <input type="file" name="thumb">
        <input type="hidden" name="thumb-guardada" 
        value="<?php echo $post['thumb']; ?>">

        <input type="submit" value="Guardar Datos">
    </form>
</div>


<?php require_once 'footer.php' ?>