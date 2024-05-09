@extends('front/include/master')
@section('title')  أكسب | من نحن  @endsection
@section('content')

    <!-- SERVICES IMAGEBOXS -->
    <div class="row-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themesflat-spacer clearfix" data-desktop="92" data-mobi="60" data-smobi="60"></div>

                    <div class="themesflat-headings style-1 clearfix text-center">
                        <h2 class="heading clearfix">من نحن</h2>
                        <div class="sep clearfix"></div>
                    </div><!-- /.themesflat-headings -->

                    <div class="themesflat-spacer clearfix" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                </div><!-- /.col-md-12 -->

                <div class="col-md-12">
                    <div class="themesflat-image-box style-1 clearfix">
                        <div class="item">
                            <div class="inner">

                                <div class="text-wrap usflex">
                                    <h3 class="title">تعرف على <span>أكسب </span> </h3>
                                    <span class="circle big-circle"></span>
                                    <span class="circle "></span>
                                </div>
                                <div class="desc about-text">{!! $settinginfo->about !!}</div>
                                <div class="text-wrap usflex">
                                    <h3 class="title">أهــم مـا يميـزنــا</h3>
                                    <span class="circle big-circle"></span>
                                    <span class="circle "></span>
                                </div>
                                <div class="bestflex">
                                    <div class="best">
                                        <i class="finance-icon-security"></i>
                                        <p>
                                            الثقة و الأمان
                                        </p>
                                    </div>
                                    <div class="best">
                                        <i class="finance-icon-star"></i>
                                        <p>
                                            خدمات متكاملة
                                        </p>
                                    </div>
                                    <div class="best">
                                        <i class="finance-icon-bulb"></i>
                                        <p>
                                            الابداع والابتكار
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!-- /.themesflat-image-box -->

                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                </div><!-- /.col-md-4 -->



            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- END SERVICES IMAGEBOXS -->

       <!-- PARTNERS -->
        <div class="row-partner outerrow ourtools">
            <div class="container">
                <div class="row logos">
                    
                    <div class="col-md-12">                                                 
                        <div class="themesflat-headings style-2 clearfix text-center">
                            <h2 class="heading clearfix">أدواتنا</h2>
                            <div class="sep"></div>
                            <p class="sub-heading clearfix">
                               {{$settinginfo->ourtoolstext}}
                            </p>
                            <div class="clearfix"></div>
                        </div>


                        <div class="col-md-12 ">
                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="40" data-smobi="40"></div>
                            <div class="themesflat-partner style-1 arrow-center offset30 offset-v0 has-arrows arrows-circle w32" data-auto="false" data-loop="false" data-column="3" data-column2="3" data-column3="2" data-gap="120">
                                <div class="owl-carousel owl-theme tools">
                                    
                                    @foreach($ourtools as $tool)
                                        <div class="partner-item clearfix">
                                            <div class="inner">
                                                
                                                <div class="thumb">
                                                    <img src="{{asset('users/images/'.$tool->image)}}" alt="Image">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="themesflat-spacer clearfix" data-desktop="64" data-mobi="40" data-smobi="40"></div>
                        </div><!-- /.col-md-12 -->
                            <div class="themesflat-spacer clearfix" data-desktop="91" data-mobi="40" data-smobi="40"></div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
            <!-- END PARTNERS -->
            
        </div>
        <!--END PARTNERS --> 
            
        <!-- SERVICES IMAGEBOXS -->
        <div class="row-services">
            <div class="container">
                <div class="row">
                    <div style="background-image: url({{asset('users/images/'.$settinginfo->stuffbgimage)}});" class="col-md-12 our-service why-us states">

                        <div class="col-md-3 servmain">
                            <div class="flex">
                                <div class="flex-parent">
                                    <img src="{{asset('users/assets/img/service/circle-state.png')}}">
                                    <p>عدد الموظفين</p>
                                    <span>{{$settinginfo->employeecount}}</span>
                                    <i class="finance-icon-bulb"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 servmain">
                            <div class="flex">
                                <div class="flex-parent">
                                    <img src="{{asset('users/assets/img/service/circle-state.png')}}">
                                    <p>عدد سنوات الخبرة</p>
                                    <span>{{$settinginfo->experiencecount}}+</span>
                                    <i class="finance-icon-bulb"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 servmain">
                            <div class="flex">
                                <div class="flex-parent">
                                    <img src="{{asset('users/assets/img/service/circle-state.png')}}">
                                    <p>عدد المشروعات</p>
                                    <span>{{$settinginfo->projectscount}}</span>
                                    <i class="finance-icon-bulb"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 servmain">
                            <div class="flex">
                                <div class="flex-parent">
                                    <img src="{{asset('users/assets/img/service/circle-state.png')}}">
                                    <p>عدد العملاء</p>
                                    <span>{{$settinginfo->clientscount}}</span>
                                    <i class="finance-icon-bulb"></i>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!-- END SERVICES IMAGEBOXS -->

        <!-- TESTIMONIALS -->
        <div class="row-testimonials outerrow">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-headings style-1 clearfix text-center">
                            <h2 class="heading clearfix">قالو عنا</h2>
                            <div class="sep clearfix"></div>
                        </div><!-- /.themesflat-headings -->
                        <div class="themesflat-spacer clearfix" data-desktop="52" data-mobi="40" data-smobi="40"></div>
                        <div class="container">
                            <div class="mycontainer">
                                <div class="themesflat-carousel-box has-bullets bullet-circle" data-auto="true" data-loop="false" data-gap="100" data-column="1" data-column2="1" data-column3="1">
                            <div class="owl-carousel customercomment owl-theme">
                                 
                                @foreach($allcomments as $comment)
                                    <div class="themesflat-testimonials style-1 clearfix image-circle"> 
                                        <div class="item said">
                                            <div class="inner">
                                                <div class="thumb new-thumb">
                                                    <img src="{{asset('users/images/'.$comment->image)}}" alt="Image">
                                                </div>
                                                <div class="block-q right-q">
                                                    <img src="{{asset('users/assets/img/service/right-q.png')}}">
                                                </div>
                                                <div class="block-q left-q">
                                                    <img src="{{asset('users/assets/img/service/left-q.png')}}">
                                                </div>
                                                <blockquote class="text">
                                                    <p> {{$comment->comment}} </p>

                                                </blockquote>
                                                <div class="name-pos">
                                                    <h6 class="name">{{$comment->name}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                            </div>
                                
                        </div>
                        
                        
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!-- END TESTIMONIALS -->


        <!-- PARTNERS -->
        <div class="row-partner outerrow">
            <div class="container">
                <div class="row logos">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="91" data-mobi="40" data-smobi="40"></div>
                        <div class="themesflat-headings style-2 clearfix text-center">
                            <h2 class="heading clearfix">عملاؤنا</h2>
                            <div class="sep"></div>
                            <p class="sub-heading clearfix">
                                 {{$settinginfo->ourclientstext}}
                            </p>
                            <div class="clearfix"></div>
                        </div>


                        <div class="col-md-12 ">
                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="40" data-smobi="40"></div>
                            <div class="themesflat-partner style-1 arrow-center offset30 offset-v0 has-arrows arrows-circle w32" data-auto="false" data-loop="false" data-column="5" data-column2="3" data-column3="2" data-gap="60">
                                <div class="owl-carousel owl-theme customers">
                                    @foreach($ourclients as $client)
                                    <div class="partner-item clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img src="{{asset('users/images/'.$client->image)}}" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="themesflat-spacer clearfix" data-desktop="64" data-mobi="40" data-smobi="40"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PARTNERS -->
            
        </div>
        <!--END PARTNERS -->
            
@endsection