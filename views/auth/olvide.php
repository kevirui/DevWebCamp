<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Recuperar Acceso a DevWebCamp</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <form action="/olvide" method="post" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" class="formulario__input" placeholder="Tu E-Mail" id="email" name="email">
        </div>
        <input type="submit" value="Enviar Instrucciones" class="formulario__submit">
    </form>

    <div class="acciones">
        <a href=" /login" class="acciones__enlace">¿Ya tienes cuenta?</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta?</a>
    </div>
</main>