@section('title', 'Home')
@section('content')
    <!--=== Search Block ===-->
    <div class="search-block parallaxBg">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <h1>{{ trans('frontend.DiscoveryNewThings', array('span' => '<span class="color-green">', 'endSpan' => '</span>')) }}</h1>
                <form method="GET" action="{{ action('SearchController@search') }}" class="sky-form page-search-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="{{ trans('frontend.SearchBox') }}">
                        <span class="input-group-btn">
                            <button type="submit" class="btn-u btn-u-lg" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <div class="inline-group">
                        <label class="checkbox"><input type="radio" name="by" value="all" checked><i></i>{{ trans('frontend.All') }}</label>
                        <label class="checkbox"><input type="radio" name="by" value="title"><i></i>{{ trans('frontend.Title') }}</label>
                        <label class="checkbox"><input type="radio" name="by" value="author"><i></i>{{ trans('frontend.Author') }}</label>
                        <label class="checkbox"><input type="radio" name="by" value="category"><i></i>{{ trans('frontend.Category') }}</label>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/container-->
    <!--=== End Search Block ===-->

    <!--=== Content ===-->
    <div class="container content">
        <div class="row category margin-bottom-20">
            <!-- Info Blocks -->
            <div class="col-md-4 col-sm-6">
                <!-- Top Categories -->
                <div class="headline"><h2>Top Repositories</h2></div>
                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                    <i class="icon-custom icon-sm rounded-x icon-bg-sea">1</i>
                    <div class="content-boxes-in-v3">
                        <h3><a href="#"> Repository 1</a><small>(55837)</small></h3>
                        <p>Short description about this repository, for example location</p>
                    </div>
                </div>
                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                    <i class="icon-custom icon-sm rounded-x icon-bg-red">2</i>
                    <div class="content-boxes-in-v3">
                        <h3><a href="#"> Repository 2</a> <small>(10837)</small></h3>
                        <p>Short description about this repository, for example location</p>
                    </div>
                </div>
                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                    <i class="icon-custom icon-sm rounded-x icon-bg-brown">3</i>
                    <div class="content-boxes-in-v3">
                        <h3><a href="#"> Repository 3</a> <small>(462)</small></h3>
                        <p>Short description about this repository, for example location</p>
                    </div>
                </div>
                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                    <i class="icon-custom icon-sm rounded-x icon-bg-green">4</i>
                    <div class="content-boxes-in-v3">
                        <h3><a href="#"> Repository 4</a> <small>(396)</small></h3>
                        <p>Short description about this repository, for example location</p>
                    </div>
                </div>
                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                    <i class="icon-custom icon-sm rounded-x icon-bg-dark">5</i>
                    <div class="content-boxes-in-v3">
                        <h3><a href="#"> Repository 5</a> <small>(156)</small></h3>
                        <p>Short description about this repository, for example location</p>
                    </div>
                </div>
            </div>
            <!-- End Info Blocks -->

            <!-- Info Blocks -->
            <div class="col-md-4 col-sm-6 md-margin-bottom-40">
                <!-- Top Categories -->
                <div class="headline"><h2>Top Authors</h2></div>
                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                    <i class="icon-custom icon-sm rounded-x icon-bg-blue">1</i>
                    <div class="content-boxes-in-v3">
                        <h3><a href="#"> John Doe</a> <small>(33324)</small></h3>
                        <p>Short description about this author, for example location and dates about him</p>
                    </div>
                </div>
                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                    <i class="icon-custom icon-sm rounded-x icon-bg-yellow">2</i>
                    <div class="content-boxes-in-v3">
                        <h3><a href="#"> John Doe</a> <small>(24053)</small></h3>
                        <p>Short description about this author, for example location and dates about him</p>
                    </div>
                </div>
                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                    <i class="icon-custom icon-sm rounded-x icon-bg-aqua">3</i>
                    <div class="content-boxes-in-v3">
                        <h3><a href="#"> John Doe</a> <small>(1268)</small></h3>
                        <p>Short description about this author, for example location and dates about him</p>
                    </div>
                </div>
                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                    <i class="icon-custom icon-sm rounded-x icon-bg-purple">4</i>
                    <div class="content-boxes-in-v3">
                        <h3><a href="#"> John Doe</a> <small>(7013)</small></h3>
                        <p>Short description about this author, for example location and dates about him</p>
                    </div>
                </div>
                <div class="content-boxes-v3 margin-bottom-10 md-margin-bottom-20">
                    <i class="icon-custom icon-sm rounded-x icon-bg-orange">5</i>
                    <div class="content-boxes-in-v3">
                        <h3><a href="#"> John Doe</a> <small>(1706)</small></h3>
                        <p>Short description about this author, for example location and dates about him</p>
                    </div>
                </div>
            </div>
            <!-- End Info Blocks -->

            <!-- Begin Section-Block -->
            <div class="col-md-4 col-sm-12">
                <div class="section-block">
                    <div class="text-center">
                        <i class="rounded icon-custom icon-sm icon-bg-darker line-icon icon-graph"></i>
                        <h2>{{ trans('frontend.PopularSearch')}}</h2>
                        <p>. <a href="#">{{ trans('frontend.ViewMore') }}</a></p>
                    </div>

                    </br>

                    <!-- Progress Bar -->
                    <h3 class="heading-xs no-top-space">John Doe <span class="pull-right">44%</span></h3>
                    <div class="progress progress-u progress-xxs">
                        <div style="width: 44%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar" class="progress-bar progress-bar-u">
                        </div>
                    </div>

                    <h3 class="heading-xs no-top-space">Education <span class="pull-right">36%</span></h3>
                    <div class="progress progress-u progress-xxs">
                        <div style="width: 36%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="76" role="progressbar" class="progress-bar progress-bar-u">
                        </div>
                    </div>

                    <h3 class="heading-xs no-top-space">Science <span class="pull-right">20%</span></h3>
                    <div class="progress progress-u progress-xxs">
                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="97" role="progressbar" class="progress-bar progress-bar-u">
                        </div>
                    </div>
                    <!-- End Progress Bar -->

                    <div class="clearfix"></div>

                    <div class="section-block-info">
                        <ul class="list-inline tags-v1">
                            <li><a href="">#John Doe</a></li>
                            <li><a href="">#Eduaction</a></li>
                            <li><a href="">#Metasearch</a></li>
                            <li><a href="">#Science</a></li>
                            <li><a href="">#Search engine</a></li>
                            <li><a href="">#CCRUZ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Section-Block -->
        </div>
        <!-- End Top Categories -->
    </div><!--/container-->
    <!--=== End Content ===-->

    <!--=== Parallax Counter ===-->
    <div class="parallax-counter-v2 parallaxBg1">
        <div class="container">
            <ul class="row list-row">
                <li class="col-md-3 col-sm-6 col-xs-12 md-margin-bottom-30">
                    <div class="counters rounded">
                        <span class="counter">18298</span>
                        <h4>{{ trans('frontend.Repositories'); }}</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12 md-margin-bottom-30">
                    <div class="counters rounded">
                        <span class="counter">24583</span>
                        <h4>{{ trans('frontend.Articles'); }}</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12 sm-margin-bottom-30">
                    <div class="counters rounded">
                        <span class="counter">37904</span>
                        <h4>{{ trans('frontend.Categories'); }}</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counters rounded">
                        <span class="counter">50892</span>
                        <h4>{{ trans('frontend.Authors'); }}</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--=== End Parallax Counter ===-->


    <!--=== Container Part ===-->
    <div class="bg-grey">
        <div class="container content-md">
            <ul class="row list-row margin-bottom-30">
                <li class="col-md-4 md-margin-bottom-30">
                    <div class="content-boxes-v3 block-grid-v1 rounded">
                        <i class="icon-custom icon-sm rounded-x icon-bg-red fa fa-line-chart"></i>
                        <div class="content-boxes-in-v3">
                            <h3><a href="#">{{ trans('frontend.OAIPMH') }}</a></h3>
                            <p>{{ trans('frontend.DescriptionOAIPMH') }}</p>
                        </div>
                    </div>
                </li>
                <li class="col-md-4 md-margin-bottom-30">
                    <div class="content-boxes-v3 block-grid-v1 rounded">
                        <i class="icon-custom icon-sm rounded-x icon-bg-red fa fa-line-chart"></i>
                        <div class="content-boxes-in-v3">
                            <h3><a href="#">{{ trans('frontend.OpenSource') }}</a></h3>
                            <p>{{ trans('frontend.DescriptionOpenSource') }}</p>
                        </div>
                    </div>
                </li>
                <li class="col-md-4">
                    <div class="content-boxes-v3 block-grid-v1 rounded">
                        <i class="icon-custom icon-sm rounded-x icon-bg-red fa fa-line-chart"></i>
                        <div class="content-boxes-in-v3">
                            <h3><a href="#">{{ trans('frontend.MetaSearch') }}</a></h3>
                            <p>{{ trans('frontend.DescriptionMetaSearch') }}</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--=== Container Part ===-->
    <div class="testimonials-v3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <ul class="list-unstyled owl-ts-v1">
                        <li class="item">
                            <img class="rounded-x img-bordered" src="assets/front-end/default_layout//img/team/img1-sm.jpg" alt="">
                            <div class="testimonials-v3-title">
                                <p>{{ trans('frontend.Me') }}</p>
                                <span>{{ trans('frontend.MeTitle') }}</span>
                            </div>
                            <p>{{ trans('frontend.AboutThisProjectFromMe') }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--=== Container Part ===-->
@stop