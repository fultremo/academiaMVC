<?php $this->layout('layouts/layout') ?>

<!-- Hero-area -->
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo URL; ?>img/page-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">

                <h1 class="white-text">Login de Usuario</h1>

            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->

<!-- Login -->
<div id="login" class="section">
<div class="container">

    <?php $this->insert('partials/feedback') ?><br>

    <form action="<? echo URL; ?>login/dologin" method="post" class="login">
        <section>
            <label>Email:</label> <input type="text" name="email">
            <br />
            <label>Clave:</label> <input type="password" name="clave">
            <br />
            <label>Recordarme:</label> <input type="checkbox" name="recordarme" value="1">
            <br />
            <button class="main-button icon-button pull-right">Acceder</button>

        </section>
    </form>
</div>
</div>



<!-- jQuery Plugins
<script type="text/javascript" src="<?php //echo URL; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php //echo URL; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php //echo URL; ?>js/main.js"></script>-->

<!-- preloader -->
<!--<div id='preloader'><div class='preloader'></div></div>-->
<!-- /preloader -->