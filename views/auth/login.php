<h1 class="nombre-pagina">Login</h1>

<p class="descripcion-pagina">Inicia Sesion con tus datos</p>

<?php
include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Correo</label>
        <input type="email" id="email" placeholder="Tu Correo" name="email">
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" placeholder="Tu Contraseña" name="password">
    </div>

    <input type="submit" class="boton" value="Iniciar Sesion">
</form>

<div class="acciones">
    <a href="/crear-cuenta">Crear Cuenta</a>
    <a href="/olvide">Olvidaste tu password?</a>
</div>