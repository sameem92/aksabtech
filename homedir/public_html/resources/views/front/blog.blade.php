@extends('front/include/master')
@section('title')  أكسب | المدونة  @endsection
@section('content')

    <!-- SERVICES IMAGEBOXS -->
        <div class="row-services serve">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="91" data-mobi="40" data-smobi="40"></div>

                        <div class="themesflat-headings style-2 clearfix text-center">
                            <div class="sub-Flex"> 
                                <span class="circle"></span>
                                <span class="circle big-circle"></span>
                                <p class="sub-heading clearfix">بعض الأعمال التي قمنا بإنجازها في أكسب </p>
                                <span class="circle big-circle"></span>
                                <span class="circle"></span>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                            <div class="themesflat-headings style-2 clearfix text-center">
                                <h2 class="heading clearfix">مدونة أكسب</h2>
                                <div class="sep clearfix"></div>
                            </div><!-- /.themesflat-headings -->
                            
                            
                        </div><!-- /.themesflat-headings -->

                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60"></div>
                    </div><!-- /.col-md-12 -->
                    


                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    <!-- END SERVICES IMAGEBOXS -->
    
    <!-- SERVICES IMAGEBOXS -->
        <div class="row-services serve">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        @foreach($blogs as $blog)                                        
                            <a  href="{{asset('blog/'.$blog->id)}}" class="col-md-6 worlsample">
                                <div class="work-container">
                                    <img src="{{asset('users/images/'.$blog->image)}}">
                                    <div class="rel-flex">
                                        <img class="work-logo" src="{{asset('users/assets/img/logo-footer-01.png')}}">
                                        <h3 class="text-center">{{$blog->title}}</h3>
                                        <p class="text-center">{{$blog->shortdesc}}</p>
                                    </div>
                                    <div class="themesflat-spacer clearfix" data-desktop="91" data-mobi="60" data-smobi="40"></div>
                                </div>
                            </a>
                        @endforeach 

                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobi="40" data-smobi="40"></div>       
                </div>
            </div>
        </div>
    <!-- END SERVICES IMAGEBOXS --> 

@endsection