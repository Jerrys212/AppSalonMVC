<h1 class="nombre-pagina">Olvide Password</h1>

<p class="descripcion-pagina">Restablece tu password</p>
<?php
include_once __DIR__ . "/../templates/alertas.php";
?>
<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" placeholder="Correo" autocomplete="off">
    </div>

    <input type="submit" value="Enviar Instrucciones" class="boton">
</form>

<div class="acciones">
    <a href="/">Iniciar Sesion</a>
    <a href="/crear-cuenta">Crear Cuenta</a>
</div>