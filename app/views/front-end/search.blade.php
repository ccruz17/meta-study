@section('title', 'Search')
@section('content')
    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs breadcrumbs-dark">
        <div class="container">
            <h1 class="pull-left"><?= trans('frontend.SearchResults') ?></h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?= action('IndexController@index') ?>"><?= trans('frontend.Home') ?></a></li>
                <li class="active"><?= trans('frontend.SearchResults') ?></li>
            </ul>
        </div>
    </div>
    <!--=== End Breadcrumbs ===-->
    <!--=== Search Block ===-->
    <div class="search-block-v2">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <h2><?= trans('frontend.SearchAgain') ?></h2>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="<?= trans('frontend.SearchBox') ?>">
                    <span class="input-group-btn">
                        <button class="btn-u" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--=== End Search Block ===-->
    <!--=== Search Results ===-->
    <div class="container s-results margin-bottom-50">
        <div class="row">
            <div class="col-md-2 hidden-xs related-search">
                <div class="row">
                    <div class="col-md-12 col-sm-4">
                        <h3><?= trans('frontend.Repositories')?></h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><?= trans('frontend.Repository')?></a></li>
                            <li><a href="#"><?= trans('frontend.Repository')?></a></li>
                            <li><a href="#"><?= trans('frontend.Repository')?></a></li>
                        </ul>
                        <a class="see-all" href="#"><?= trans('frontend.SeeAll')?></a>
                        <hr>
                    </div>

                    <div class="col-md-12 col-sm-4">
                        <h3><?= trans('frontend.Authors')?></h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><?= trans('frontend.Author')?></a></li>
                            <li><a href="#">‎<?= trans('frontend.Author')?></a></li>
                            <li><a href="#">‎<?= trans('frontend.Author')?></a></li>
                        </ul>
                        <a class="see-all" href="#"><?= trans('frontend.SeeAll')?></a>
                        <hr>
                    </div>

                    <div class="col-md-12 col-sm-4">
                        <h3><?= trans('frontend.Categories')?></h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><?= trans('frontend.Category')?></a></li>
                            <li><a href="#"><?= trans('frontend.Category')?></a></li>
                            <li><a href="#"><?= trans('frontend.Category')?></a></li>
                        </ul>
                        <a class="see-all" href="#"><?= trans('frontend.SeeAll')?></a>
                        <hr>
                    </div>

                    <div class="col-md-12 col-sm-4">
                        <h3><?= trans('frontend.SearchHistory') ?></h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Last search</a></li>
                            <li><a href="#">Last search</a></li>
                            <li><a href="#">Last search</a></li>
                        </ul>
                        <a class="see-all" href="#"><?= trans('frontend.SeeAll')?></a>
                    </div>
                </div>
            </div><!--/col-md-2-->

            <div class="col-md-10">
                <span class="results-number"><?= trans('frontend.AboutResults', array('num' =>number_format(17061990, 0, '', ','))) ?></span>
                <!-- Begin Inner Results -->
                <div class="inner-results">
                    <h3><a href="#">Title</a></h3>
                    <ul class="list-inline up-ul">
                        <li>URL origin‎</li>
                    </ul>
                    <p>Text Description.</p>
                    <ul class="list-inline down-ul">
                        <li>
                            <ul class="list-inline s-icons">
                                <li><a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Dropbox" href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Linkedin" href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </li>
                        <li>Date - <?= trans('By') ?> Author or Authors</li>
                        <li>Format</li>
                        <li><a href="#">Reporsitory</a></li>
                    </ul>
                </div>
                <!-- Begin Inner Results -->
                <hr>

                <div class="margin-bottom-30"></div>

                <div class="text-left">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">157</a></li>
                        <li><a href="#">158</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div><!--/col-md-10-->
        </div>
    </div>
    <!--=== Search Results ===-->
@stop