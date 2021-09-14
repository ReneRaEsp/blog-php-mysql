<?php require_once 'header.php' ?>

<div class="nuevo">
    <h2>Nuevo Articulo</h2>
    <form method="post" class="formulario"
     enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="text" name="titulo" placeholder="Titulo del Articulo">
        <input type="text" name="extracto" placeholder="Extracto">
        <textarea name="texto" placeholder="texto del articulo"></textarea>
        <input type="file" name="thumb">

        <input type="submit" value="Crear Articulo">
    </form>
</div>


<?php require_once 'footer.php' ?>