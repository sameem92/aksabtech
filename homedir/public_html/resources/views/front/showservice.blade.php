@extends('front/include/master')
@section('title')  أكسب | {{$showservice->service}}  @endsection
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
                                <p class="sub-heading clearfix">{{$showservice->servicetext}}</p>
                                <span class="circle big-circle"></span>
                                <span class="circle"></span>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60"></div>
                    </div>
                    
                    @if($showservice->features == null)
                        <div style="background-image: url({{asset('users/images/'.$showservice->serviceimagebg)}});" class="col-md-12">                                                  
                            <div class="container  mainbg">
                                <div class="inner">
                                    <img src="{{asset('users/images/'.$showservice->servicemockup)}}">
                                </div>
                            </div>
                        </div>
                    @else 
                        <div style="background-image: url({{asset('users/images/'.$showservice->serviceimagebg)}});" class="col-md-12 our-service">
                            

                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60"></div>
                            
                            <div class="themesflat-headings style-2 clearfix text-right margin-right-100 margin-bottom-100">
                                <h2 class="heading clearfix" style="color: #fff">{{$showservice->featuretext}}</h2>
                                <div class="sep"></div>
                                <div class="themesflat-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                                <div class="advice sub-heading"> {!! $showservice->features !!} </div>
                            </div>
                            
                            <a href="{{asset('contactus')}}" style="position: relative;right: 50px;bottom: 50px;cursor: pointer">
                                <p style="position: absolute;z-index: 1;top: 12%; right: 80px;width: 150px;font-size: 100%">احجز خدمتك الآن</p>
                                <img src="{{asset('users/assets/img/service/service-add.png')}}">
                            </a>
                            
                        </div>
                    @endif

                </div>
            </div>
        </div>
    <!-- END SERVICES IMAGEBOXS -->
    
    <!-- SERVICES IMAGEBOXS -->
        <div class="row-services">
            <div class="container">
                <div class="row" dir="rtl">

                    <div class="col-md-12">                                                
                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60"></div>
                        <div class="themesflat-headings style-2 clearfix text-center">
                            <h2 class="heading clearfix"> {{$showservice->phasetext}} </h2>
                            <div class="sep clearfix"></div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60"></div>
                    </div>

                    @foreach($subservices as $key => $service)
                        @if($key % 2 == 0)
                            <div class="col-md-12 serve-container"> 

                                <div class="service-center service-center-d">
                                    <h2 class="heading clearfix">{{$service->service}}</h2>
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
                                        <h2 class="heading clearfix right-service right-service-d">{{$service->service}}</h2>
                                        <i class="finance-icon-bulb bulb-right"></i>
                                    </div>
                                </div>
                            </div>
                        @else 
                            <div class="col-md-12 serve-container">  
                                <div class="service-center service-center-d">
                                    <h2 class="heading clearfix">{{$service->service}}</h2>
                                    <img  src="assets/img/service/service-center.png">
                                </div>
                                <div class="col-md-4 serve-hide">                                                    
                                    <div class="themesflat-headings style-2 clearfix text-center">
                                        <img src="{{asset('users/assets/img/service/right-service.png')}}">
                                        <h2 class="heading clearfix right-service right-service-d">{{$service->service}}</h2>
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
                    <a href="{{asset('contactus')}}" class="serv-black" style="position: relative;right: 50px;bottom: 50px;cursor: pointer">
                        <p style="position: absolute;z-index: 1;top: 12%; right: 80px;width: 150px;font-size: 100%" >احجز خدمتك الآن</p>
                        <img src="{{asset('users/assets/img/service/service-add-black.png')}}">
                    </a>
                                            
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
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
                                        @foreach($allservices as $service)
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
    
    <!-- our options -->
        <div class="row-partner outerrow">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="60" data-smobi="60"></div>

                        <div class="themesflat-headings style-2 clearfix text-center">
                            <h2 class="heading clearfix"> الباقات و العروض</h2>
                            <div class="sep"></div>
                            <p class="sub-heading clearfix">{{$settinginfo->packagetext}}</p>
                            <div class="clearfix"></div>
                        </div>


                        <div class="col-md-12 over bakat">
                            <div class="themesflat-spacer clearfix" data-desktop="60" data-mobi="40" data-smobi="40"></div>

                            <div class="themesflat-partner style-1 arrow-center offset30 offset-v0 has-arrows arrows-circle w32" data-auto="false" data-loop="false" data-column="3" data-column2="2" data-column3="1" data-gap="60">
                                <div class="owl-carousel owl-theme">
                                    @foreach($packages as $package)
                                        <div class="partner-item clearfix">
                                            <div class="inner">                 
                                                    <div class="thumb">
                                                        <div class="newcontainer">
                                                            <div class="themesflat-headings style-2 clearfix text-center">
                                                                <div style="background-image: url({{asset('users/images/'.$package->bgimage)}});" class="sell-option">
                                                                    <h2 class="sub-heading clearfix">{{$package->name}}</h2>
                                                                    <div class="sep"></div>
                                                                </div>
                                                                <div class="my-option text-right sub-heading clearfix"> {!! $package->packagedesc !!} </div>
                                                                <div><span>سعر البافة</span><h6>{{$package->price}} ريال</h6></div>
                                                                <a class="sendServ">شراء الباقة</a>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>                      
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="91" data-mobi="40" data-smobi="40"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- our options -->
        
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

@endsection