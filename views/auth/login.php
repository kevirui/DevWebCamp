<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Inicia Sesión en DevWebCamp</p>


    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <form action="/login" method="post" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" class="formulario__input" placeholder="Tu E-Mail" id="email" name="email">

        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input type="password" class="formulario__input" placeholder="Tu Contraseña" id="password" name="password">

        </div>
        <input type="submit" value="Iniciar Sesión" class="formulario__submit">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta?</a>
        <a href=" /olvide" class="acciones__enlace">¿Olvidaste tu contraseña?</a>
    </div>
</main>