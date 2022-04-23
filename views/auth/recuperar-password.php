<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">
    Coloca tu nuevo password a continuacion
</p>

<?php
include_once __DIR__ . "/../templates/alertas.php";
?>
<?php if ($error) return; ?>
<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Contraseña">
    </div>
    <input type="submit" class="boton" value="Reestablecer password">
</form>


<div class="acciones">
    <a href="/">Iniciar Sesion</a>
    <a href="/crear-cuenta">Crear Cuenta</a>
</div>