<?php

$this->layout('layouts/layout') ?>

<!-- Hero-area -->
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo URL; ?>img/page-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <h2 class="white-text">Mensaje enviado</h2>
                <h4 class="lead white-text">
                    El mensaje ha sido enviado.
                </h4>
                <?php $this->insert('partials/feedback') ?>
            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->