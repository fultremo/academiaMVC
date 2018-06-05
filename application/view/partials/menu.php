<!-- navigation -->
<nav id="nav">

    <?php if (!Mini\Libs\Sesion::userIsLoggedIn()): ?>
        <ul class="main-menu nav navbar-nav navbar-right">
            <li><a href="<?php echo URL; ?>">Home</a></li>
            <li><a href="<?php echo URL; ?>posts/todos">Posts</a></li>
            <li><a href="<?php echo URL; ?>admin/dashboard">Zona privada</a></li>
            <li><a href="<?php echo URL; ?>pages/courses">Cursos</a></li>
            <li><a href="<?php echo URL; ?>pages/about">About</a></li>
            <li><a href="<?php echo URL; ?>pages/contact">Contacto</a></li>
            <li><a href="<?php echo URL; ?>registro">Registrarse</a></li>
            <li><a href="<?php echo URL; ?>login">Login</a></li>
        </ul>
    <?php else : ?>
    <ul class="main-menu nav navbar-nav navbar-right">
        <li><a href="<?php echo URL; ?>">Home</a></li>
        <li><a href="<?php echo URL; ?>posts/todos">Posts</a></li>
        <li><a href="<?php echo URL; ?>admin/dashboard">Zona privada</a></li>
        <li><a href="<?php echo URL; ?>pages/courses">Cursos</a></li>
        <li><a href="<?php echo URL; ?>pages/about">About</a></li>
        <li><a href="<?php echo URL; ?>pages/contact">Contacto</a></li>
        <li><a href="<?php echo URL; ?>registro">Registrarse</a></li>
        <li><a href="<?php echo URL; ?>login/salir">Salir</a></li>
    </ul>
    <?php endif ?>
</nav>