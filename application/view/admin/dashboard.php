<?php use Mini\Libs\Sesion; $this->layout('admin/layouts/layout') ?>

<h1>Dashboard</h1>
<p>Usuario autenticado: <?php if (Mini\Libs\Sesion::userIsLoggedIn()): ?><?= ucwords(Sesion::get("user_name")) ?></p>
<p>Correo electrónico: <?= Sesion::get("user_email") ?></p>
<?php else : ?>
    <?php header('location: /academia'); ?>
<?php endif ?>
