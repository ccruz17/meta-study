<div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="<?= action('IndexController@index') ?>">
                <img src="assets/front-end/default_layout/img/logo1-teal.png" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class="topbar">
                <ul class="loginbar pull-right">
                    <li class="hoverSelector">
                        <i class="fa fa-globe"></i>
                        <a><?= trans('frontend.Languages'); ?></a>
                        <ul class="languages hoverSelectorBlock">
                            <li class="active">
                                <a href="#"><?= trans('frontend.English'); ?> <i class="fa fa-check"></i></a>
                            </li>
                            <li><a href="#"><?= trans('frontend.Spanish'); ?></a></li>
                        </ul>
                    </li>
                    <!--li class="topbar-devider"></li-->
                    <!--li><a href="page_faq.html">Help</a></li-->
                    <li class="topbar-devider"></li>
                    <li><a href=""><?= trans('frontend.Login'); ?></a></li>
                </ul>
            </div>
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">

                    <!-- Blog -->
                    <li>
                        <a href="<?= action('IndexController@index') ?>">
                            <?= trans('frontend.Home'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/ccruz17/meta-study" >
                            <?= trans('frontend.Github'); ?>
                        </a>
                    </li>
                    <!-- End Blog -->

                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <form method="GET" action="<?= action('SearchController@search') ?>">
                                <div class="input-group animated fadeInDown">
                                    <input type="text" name="q" class="form-control" placeholder="<?= trans('frontend.Search'); ?>">
                                    <input type="hidden" name="by" value="all">
                                    <span class="input-group-btn">
                                        <button class="btn-u" type="submit"><?= trans('frontend.Go'); ?></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->
    @yield('content')

</div><!--/End Wrapepr-->