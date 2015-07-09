<!--=== Footer Version 1 ===-->
<div class="footer-v1">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-4 md-margin-bottom-40">
                    <a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/front-end/default_layout//img/logo1-teal.png" alt=""></a>
                    <p>{{ trans('frontend.AboutMetaStudy1') }}</p>
                    <p>{{ trans('frontend.AboutMetaStudy2') }}</p>
                </div><!--/col-md-3-->
                <!-- End About -->



                <!-- Link List -->
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="headline"><h2>{{ trans('frontend.UsefulLinks') }}</h2></div>
                    <ul class="list-unstyled link-list">
                        <li><a href="http://www.ccruz.ga">{{ trans('frontend.AboutMe') }}</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="https://github.com/ccruz17/meta-study">{{ trans('frontend.SeeOnGithub') }}</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="https://www.openarchives.org/pmh">{{ trans('frontend.OAIPMH') }}</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div><!--/col-md-3-->
                <!-- End Link List -->

                <!-- Address -->
                <div class="col-md-4 map-img md-margin-bottom-40">
                    <div class="headline"><h2>{{ trans('frontend.ContactUs') }}</h2></div>
                    <address class="md-margin-bottom-40">
                        11506, 12 Sur, Los Heroes <br />
                        Puebla, Puebla <br />
                        México <br />
                        <a href="mailto:ccruz.ga17@gmail.com" class="">ccruz.ga17@gmail.com</a>
                    </address>
                </div><!--/col-md-3-->
                <!-- End Address -->
            </div>
        </div>
    </div><!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        2015 &copy; {{ trans('frontend.AllRightsReserved') }}
                        <a href="http://www.ccruz.ga">CCRUZ</a>
                    </p>
                </div>

                <!-- Social Links -->
                <div class="col-md-6">
                    <!--ul class="footer-socials list-inline">
                        <li>
                            <a href="https://www.facebook.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                    </ul-->
                </div>
                <!-- End Social Links -->
            </div>
        </div>
    </div><!--/copyright-->
</div>
<!--=== End Footer Version 1 ===-->
<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/front-end/default_layout/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/front-end/default_layout/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/front-end/default_layout/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/front-end/default_layout/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/front-end/default_layout/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="assets/front-end/default_layout/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/front-end/default_layout/plugins/counter/waypoints.min.js"></script>
<script type="text/javascript" src="assets/front-end/default_layout/plugins/counter/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/front-end/default_layout/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/front-end/default_layout/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/front-end/default_layout/js/app.js"></script>
<script type="text/javascript" src="assets/front-end/default_layout/js/plugins/owl-carousel.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initParallaxBg();
        OwlCarousel.initOwlCarousel();
    });
</script>
<!--[if lt IE 9]>
<script src="assets/front-end/default_layout/plugins/respond.js"></script>
<script src="assets/front-end/default_layout/plugins/html5shiv.js"></script>
<script src="assets/front-end/default_layout/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->