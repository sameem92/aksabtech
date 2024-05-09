@extends('front/include/master')
@section('title')  أكسب | الشروط والأحكام  @endsection
@section('content')

        <!-- SERVICES IMAGEBOXS -->
        <div class="row-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="92" data-mobi="60" data-smobi="60"></div>
                        <div class="themesflat-headings style-1 clearfix text-center">
                            <h2 class="heading clearfix">الشروط والأحكام</h2>
                            <div class="sep clearfix"></div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-image-box style-1 clearfix">
                            <div class="item">
                                <div class="inner">
                                    <div class="desc about-text">{!! $settinginfo->policy !!}</div>
                                </div>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SERVICES IMAGEBOXS -->

@endsection