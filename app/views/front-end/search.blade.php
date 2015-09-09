@section('title', 'Search')
@section('content')
    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs breadcrumbs-dark">
        <div class="container">
            <h1 class="pull-left">{{ trans('frontend.SearchResults') }}</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ action('IndexController@index') }}">{{ trans('frontend.Home') }}</a></li>
                <li class="active">{{ trans('frontend.SearchResults') }}</li>
            </ul>
        </div>
    </div>
    <!--=== End Breadcrumbs ===-->
    <!--=== Search Block ===-->
    <div class="search-block-v2 parallaxBg">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <h2>{{ trans('frontend.SearchAgain') }}</h2>
                <form method="GET" action="{{ action('SearchController@search') }}" class="sky-form page-search-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="{{ trans('frontend.SearchBox') }}" value="{{ $Q }}">
                        <span class="input-group-btn">
                            <button type="submit" class="btn-u" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <div class="inline-group">
                        <label class="checkbox"><input type="radio" name="by" value="all" {{ $BY == 'all' ? 'checked': '' }}><i></i>{{ trans('frontend.All') }}</label>
                        <label class="checkbox"><input type="radio" name="by" value="title" {{ $BY == 'title' ? 'checked': '' }}><i></i>{{ trans('frontend.Title') }}</label>
                        <label class="checkbox"><input type="radio" name="by" value="author" {{ $BY == 'author' ? 'checked': '' }}><i></i>{{ trans('frontend.Author') }}</label>
                        <label class="checkbox"><input type="radio" name="by" value="category" {{ $BY == 'category' ? 'checked': '' }}><i></i>{{ trans('frontend.Category') }}</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--=== End Search Block ===-->
    <!--=== Search Results ===-->
    <div class="container s-results margin-bottom-50">
        <div class="row">
            @if($RESULTS->count()>0)
                <div class="col-md-2 hidden-xs related-search">
                    <div class="row">


                        <div class="col-md-12 col-sm-4">
                            <h3>{{ trans('frontend.Repositories')}}</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">{{ trans('frontend.Repository')}}</a></li>
                                <li><a href="#">{{ trans('frontend.Repository')}}</a></li>
                                <li><a href="#">{{ trans('frontend.Repository')}}</a></li>
                            </ul>
                            <a class="see-all" href="#">{{ trans('frontend.SeeAll')}}</a>
                            <hr>
                        </div>

                        <div class="col-md-12 col-sm-4">
                            <h3>{{ trans('frontend.Authors')}}</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">{{ trans('frontend.Author')}}</a></li>
                                <li><a href="#">‎{{ trans('frontend.Author')}}</a></li>
                                <li><a href="#">‎{{ trans('frontend.Author')}}</a></li>
                            </ul>
                            <a class="see-all" href="#">{{ trans('frontend.SeeAll')}}</a>
                            <hr>
                        </div>

                        <div class="col-md-12 col-sm-4">
                            <h3>{{ trans('frontend.Categories')}}</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">{{ trans('frontend.Category')}}</a></li>
                                <li><a href="#">{{ trans('frontend.Category')}}</a></li>
                                <li><a href="#">{{ trans('frontend.Category')}}</a></li>
                            </ul>
                            <a class="see-all" href="#">{{ trans('frontend.SeeAll')}}</a>
                            <hr>
                        </div>

                        <div class="col-md-12 col-sm-4">
                            <h3>{{ trans('frontend.SearchHistory') }}</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Last search</a></li>
                                <li><a href="#">Last search</a></li>
                                <li><a href="#">Last search</a></li>
                            </ul>
                            <a class="see-all" href="#">{{ trans('frontend.SeeAll')}}</a>
                        </div>
                    </div>
                </div><!--/col-md-2-->

                <div class="col-md-10">
                    <span class="results-number">{{ trans('frontend.AboutResults', array('num' =>number_format($RESULTS->count(), 0, '', ','))) }}</span>
                    <hr>
                    <!-- Begin Inner Results -->
                    @foreach($RESULTS as $register)
                    <div class="inner-results">
                        <h3><a href="#">{{ $register->title}}</a></h3>
                        <ul class="list-inline up-ul">
                            <li>URL origin‎</li>
                        </ul>
                        <p>{{ $register->body }}</p>
                        <ul class="list-inline down-ul">
                            <li>
                                <ul class="list-inline s-icons">
                                    <li><a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Dropbox" href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                    <li><a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Linkedin" href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                            </li>
                            <li>Date - {{ trans('frontend.By') }} Author or Authors</li>
                            <li>Format</li>
                            <li><a href="#">Reporsitory</a></li>
                        </ul>
                    </div>
                    <hr>
                    @endforeach
                    <!-- End Inner Results -->
                    <div class="margin-bottom-30"></div>
                    {{ $RESULTS->appends(array('q' => $Q, 'by' => $BY, 'rows' => $ROWS))->links(); }}
                </div><!--/col-md-10-->

            @else
                <div class="col-md-12 shadow-wrapper">
                    <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                        <h2>{{ trans('frontend.WithoutResults')  }}</h2>
                        <p>{{ trans('frontend.BodyWithoutResults')  }}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!--=== Search Results ===-->
@stop