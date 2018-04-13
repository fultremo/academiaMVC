<?php
use Mini\Libs\Sesion; $this->layout('layouts/layout') ?>

<!-- Hero-area -->
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo URL; ?>img/page-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">

                <h2 class="white-text">Login Correcto</h2>
                <span class="badge badge-pill badge-success"> Login Ok, amigo <?= Sesion::get("user_name") ?></span>
            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->

