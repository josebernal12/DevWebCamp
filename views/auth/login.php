<main class="auth">
    <h2 class="auth__heading">
        <?php echo $titulo; ?>
    </h2>
    <p class="auth__texto">Iniciar Sesión en DevWebcamp</p>

    <form class="formulario">
        <div class="formulario__campo">
            <label class="formulario__label"for="email">Email</label>
            <input type="email" class="formulario__input" placeholder="tu Email" id="email">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label"for="password">Password</label>
            <input type="password" class="formulario__input" placeholder="tu Password" id="password">
        </div>

        <input type="submit" class="formulario__submit" value="Iniciar Sesión">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtener una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</a>
    </div>
</main>