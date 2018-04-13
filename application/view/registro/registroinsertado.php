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
                <h2 class="white-text">Usuario registrado</h2>
                <h4 class="lead white-text">
                    El usuario ha sido registrado.
                </h4>
                <?php $this->insert('partials/feedback') ?>
            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->
