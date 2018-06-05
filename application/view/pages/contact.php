<?= $this->layout('layouts/layout') ?>

<?= $this->insert('partials/header') ?>

<!-- Hero-area -->
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo URL; ?>img/page-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <ul class="hero-area-tree">
                    <li><a href="<?php echo URL; ?>">Home</a></li>
                    <li>Contacto</li>
                </ul>
                <h1 class="white-text">Estar en contacto</h1>

            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->

<!-- Contact -->
<div id="contact" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- contact form -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h4>Enviar un mensaje</h4>
                    <?php $this->insert('partials/feedback') ?><br>
                    <form action="<?php echo URL; ?>contacts/sendmessage" method="POST">
                        <input class="input" type="text" name="first_name"
                               value="<?= (isset($datos['first_name'])) ?
                                   $datos['first_name'] :
                                   "" ?>" placeholder="Nombre">
                        <input class="input" type="text" name="last_name"
                               value="<?= (isset($datos['last_name'])) ?
                                   $datos['last_name'] :
                                   "" ?>" placeholder="Apellidos">
                        <input class="input" type="email" name="email"
                               value="<?= (isset($datos['email'])) ?
                                   $datos['email'] :
                                   "" ?>"
                               placeholder="Email">
                        <input class="input" type="text" name="subject"
                               value="<?= (isset($datos['subject'])) ?
                                   $datos['subject'] :
                                   "" ?>"
                               placeholder="Asunto">
                        <textarea class="input" name="message" placeholder="Escribe tu mensaje">
                            <?= (isset($datos['message'])) ?
                                $datos['message'] :
                                "" ?>
                        </textarea>
                        <button class="main-button icon-button pull-right">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
            <!-- /contact form -->

            <!-- contact information -->
            <div class="col-md-5 col-md-offset-1">
                <h4>Información de Contacto</h4>
                <ul class="contact-details">
                    <li><i class="fa fa-envelope"></i>Educate@email.com</li>
                    <li><i class="fa fa-phone"></i>122-547-223-45</li>
                    <li><i class="fa fa-map-marker"></i>4476 Clement Street</li>
                </ul>

                <!-- contact map -->
                <div id="contact-map"></div>
                <!-- /contact map -->

            </div>
            <!-- contact information -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Contact -->

<!-- jQuery Plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript" src="js/google-map.js"></script>
<script type="text/javascript" src="js/main.js"></script>


