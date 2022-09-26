<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia seción con tus datos</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu Email" name="email">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tu password" name="password">
    </div>

    <input type="submit" class="boton" value="Iniciar secion">
</form>

<div class="acciones">
    <a class="l1" href="/crear-cuenta">¿Aun no tienes una cuenta? Crea una</a>
    <a class="l1" href="/olvide">¿Olvidaste tu password?</a>
</div>
