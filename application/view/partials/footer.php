<!-- Footer -->
<footer id="footer" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- footer logo -->
            <div class="col-md-6">
                <div class="footer-logo">
                    <a class="logo" href="<?php echo URL; ?>">
                        <img src="<?php echo URL; ?>img/logo.png" alt="logo">
                    </a>
                </div>
            </div>
            <!-- footer logo -->

            <?= $this->insert('partials/footer-nav') ?>

        </div>
        <!-- /row -->

        <!-- row -->
        <div id="bottom-footer" class="row">

            <!-- social -->
            <div class="col-md-4 col-md-push-8">
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/sharer.php?url=&title="
                           class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/intent/tweet?url=&text=&via=&hashtags=BlogAcademiaEdusite"
                           class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://plus.google.com/share?url=" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <!-- /social -->

            <!-- copyright -->
            <div class="col-md-8 col-md-pull-4">
                <div class="footer-copyright">
                    <span>&copy; Copyright 2018. All Rights Reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></span>
                </div>
            </div>
            <!-- /copyright -->

        </div>
        <!-- row -->

    </div>
    <!-- /container -->

</footer>
<!-- /Footer -->