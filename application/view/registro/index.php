<?php $this->layout('layouts/layout') ?>

<!-- Hero-area -->
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo URL; ?>img/page-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <h2 class="white-text">Registro de Usuario</h2>
            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->

<!-- Registro -->
<div id="registro" class="section">
<div class="container">

    <?php $this->insert('partials/feedback') ?><br>
    <form action="<?php echo URL; ?>registro/doregister" method="POST">
        <p>
            <label for="first_name">Nombre</label>
            <input type="text" name="first_name"
                   value="<?= (isset($datos['first_name'])) ?
                       $datos['first_name'] :
                       "" ?>"
            >
            <?php //$this->mostrar_error_campo("first_name", $errores) ?>
        </p>
        <p>
            <label for="last_name">Apellidos</label>
            <input type="text" name="last_name"
                   value="<?= (isset($datos['last_name'])) ?
                       $datos['last_name'] :
                       "" ?>"
            >
            <?php //$this->mostrar_error_campo("last_name", $errores) ?>
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" name="email"
                   value="<?= (isset($datos['email'])) ?
                       $datos['email'] :
                       "" ?>"
            >
            <?php //$this->mostrar_error_campo("email", $errores) ?>
        </p>
        <p>
            <label for="nickname">Nickname</label>
            <input type="text" name="nickname"
                   value="<?= (isset($datos['nickname'])) ?
                       $datos['nickname'] :
                       "" ?>"
            ></input>
            <?php //$this->mostrar_error_campo("nickname", $errores) ?>
        </p>
        <p>
            <label for="clave">Clave</label>
            <input type="password" name="clave" >
            <?php //$this->mostrar_error_campo("clave", $errores) ?>
        </p>
        <p>
            <label for="clave2">Repetir Clave</label>
            <input type="password" name="clave2" ></input>
            <?php //$this->mostrar_error_campo("clave2", $errores) ?>
        </p>
        <p>
            <button class="main-button icon-button pull-right">Enviar</button>
        </p>
    </form>
</div>
</div>



