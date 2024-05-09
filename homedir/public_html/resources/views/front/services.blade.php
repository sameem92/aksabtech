@extends('front/include/master')
@section('title')  أكسب | خدماتنا  @endsection
@section('content')

        <!-- TESTIMONIALS -->
            <div class="row-testimonials outerrow">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="themesflat-spacer clearfix" data-desktop="91" data-mobi="40" data-smobi="40"></div>

                            <div class="themesflat-headings style-2 clearfix text-center">
                                <div class="sub-Flex">
                                    <span class="circle"></span>
                                    <span class="circle big-circle"></span>
                                    <p class="sub-heading clearfix"> {{$settinginfo->servicetext}} </p>
                                    <span class="circle big-circle"></span>
                                    <span class="circle"></span>
                                </div>
                            </div>

                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60">
                            </div>
                        </div>

                        <div style="background-image: url({{asset('users/images/'.$settinginfo->servicesbgimage)}});" class="col-md-12 our-service why-us states unclip">
                            
                            @foreach($services as $service)
                            <div class="col-md-3 servmain">
                                <div class="flex">
                                    <div class="flex-parent">
                                        <img src="{{asset('users/assets/img/service/new-circle-state.png')}}">
                                        <p><a href="{{asset('services/'.$service->id)}}" class="mydetails">التفاصيل</a> </p>
                                        <span  class="web-details">{{$service->service}}</span>
                                        <i class="finance-icon-bulb"></i>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        
                        </div>
                        
                    </div>
                </div>
            </div>
        <!-- END TESTIMONIALS -->
        
        <!-- SERVICES IMAGEBOXS -->
            <div class="row-services">
                <div class="container">
                    <div class="row" dir="rtl">

                        <div class="col-md-12">                                                
                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60"></div>
                            <div class="themesflat-headings style-2 clearfix text-center">
                                <h2 class="heading clearfix">تفاصيل الخدمات</h2>
                                <div class="sep clearfix"></div>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60"></div>
                        </div>


                        @foreach($services as $key => $service)
                            @if($key % 2 == 0)
                                <div class="col-md-12 serve-container"> 

                                    <div class="service-center service-center-d">
                                        <a href="{{asset('services/'.$service->id)}}"><h2 class="heading clearfix">{{$service->service}}</h2></a>
                                        <img  src="{{asset('users/assets/img/service/service-center.png')}}">
                                    </div>
                                    <div class="col-md-8">
                                        <p class="serv-details text-right">
                                            {{$service->shortdesc}}
                                        </p>
                                    </div>
                                    <div class="col-md-4 serve-hide"> 
                                        <div class="themesflat-headings style-2 clearfix text-center">
                                            <img src="{{asset('users/assets/img/service/right-service.png')}}">
                                            <a href="{{asset('services/'.$service->id)}}"><h2 class="heading clearfix right-service right-service-d">{{$service->service}}</h2></a>
                                            <i class="finance-icon-bulb bulb-right"></i>
                                        </div>
                                    </div>
                                </div>
                            @else 
                                <div class="col-md-12 serve-container">  
                                    <div class="service-center service-center-d">
                                        <a href="{{asset('services/'.$service->id)}}"><h2 class="heading clearfix">{{$service->service}}</h2></a>
                                        <img  src="assets/img/service/service-center.png">
                                    </div>
                                    <div class="col-md-4 serve-hide">                                                    
                                        <div class="themesflat-headings style-2 clearfix text-center">
                                            <img src="{{asset('users/assets/img/service/right-service.png')}}">
                                            <a href="{{asset('services/'.$service->id)}}"><h2 class="heading clearfix right-service right-service-d">{{$service->service}}</h2></a>
                                            <i class="finance-icon-bulb bulb-right"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="serv-details text-right">
                                            {{$service->shortdesc}}
                                        </p>
                                    </div>
                                    
                                </div>
                            @endif

                        @endforeach

                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60"></div>
                        <a href="{{asset('/contactus')}}" class="serv-black" style="position: relative;right: 50px;bottom: 50px;cursor: pointer">
                            <p style="position: absolute;z-index: 1;top: 12%; right: 80px;width: 150px;font-size: 100%" >احجز خدمتك الآن</p>
                            <img src="{{asset('users/assets/img/service/service-add-black.png')}}">
                        </a>

                    </div>
                </div>
            </div>
        <!-- END SERVICES IMAGEBOXS -->

        <!--form-->
            <div class="row-request form-responsive-d ">
                <div class="container-fluid">
                    <div class="row equalize sm-equalize-auto">

                        <div class="col-md-12 bg-light-grey">
                            <div class="themesflat-spacer clearfix" data-desktop="85" data-mobi="40" data-smobi="40"></div>

                            <div class="themesflat-content-box clearfix " data-margin="0% 15% 0% 15%" data-mobimargin="0% 5% 0% 5%">
                                <div class="themesflat-headings style-3 clearfix">
                                    <h2 class="heading clearfix">أختر خدمتك اللآن</h2>
                                    <div class="sep clearfix"></div>
                                    <p class="sub-heading clearfix">سيقوم أحد مندوبينا بالرد عليك</p>
                                </div><!-- /.themesflat-headings -->

                                <div class="themesflat-spacer clearfix" data-desktop="32" data-mobi="40" data-smobi="40"></div>

                                <div class="themesflat-contact-form style-1">
                                {!! Form::open(array('method' => 'post','class' => 'contact-form wpcf7-form','url' =>'addorder')) !!}
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="text" tabindex="2" id="name" name="name" value="" class="wpcf7-form-control" placeholder="الاسم" required>
                                    </span>    
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="text" tabindex="2" id="phone" name="phone" value="" class="wpcf7-form-control" placeholder="رقم الجوال" required>
                                    </span>
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" tabindex="2" id="email" name="email" value="" class="wpcf7-form-control" placeholder="البريد الالكتروني" required>
                                    </span>      
                                    <span class="wpcf7-form-control-wrap your-select">
                                        <select name="service" id="slt-1">
                                            @foreach($services as $service)
                                                <option value="{{$service->id}}">{{$service->service}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <div class="wrap-submit">
                                        <input type="submit" value="ارسال" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="submit">
                                    </div>
                                    <span class="your-notification">شكرا لتواصلك مع أكسب
                                {!! Form::close() !!}
                                </div>
                            </div>

                            <div class="themesflat-spacer clearfix" data-desktop="90" data-mobi="40" data-smobi="40"></div>
                        </div>
                    </div>
                </div>
            </div>
        <!--End Form-->

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
                </div>
            </div>
        <!-- END TESTIMONIALS -->

@endsection