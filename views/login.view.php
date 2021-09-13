<?php require_once 'header.php'; ?>

<div class="login">
    <h2 class="titulo">Iniciar Sesion</h2>
    <form method="post"
    class="formulario"
    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="text" name="usuario" placeholder="Usuario" >
        <input type="password" name="password" placeholder="Clave">
        <input class="btn" type="submit" value="Iniciar Sesion">
    </form>
</div>

<?php require_once 'footer.php'; ?>