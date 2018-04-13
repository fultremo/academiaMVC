<?php $this->layout('layouts/layout') ?>
<!-- Hero-area -->
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo URL; ?>img/page-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">

                <h1 class="white-text">Acabas de cometer un error imperdonable.</h1>
                <?= $this->section('content'); ?>
            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->
