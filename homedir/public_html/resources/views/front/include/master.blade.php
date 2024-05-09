<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="author" content="themesflat.com">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/animsition.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/themecore-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/finance-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/simpletextrotator.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/vegas.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/shortcodes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/woocommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/customfont.css')}}">

    
    
    <link rel="stylesheet" type="text/css" href="{{asset('users/includes/rev-slider/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/includes/rev-slider/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/includes/rev-slider/css/navigation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users/assets/css/style.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/apple-touch-icon-158-precomposed.png">
    <link href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700&display=swap&subset=arabic" rel="stylesheet">


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="page header-fixed no-sidebar site-layout-full-width header-style-2 has-topbar topbar-style-2 menu-has-search menu-has-cart">

    <div id="wrapper" class="animsaition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            <div id="site-header-wrap" class="absolute">
                <!-- Top Bar -->
                <div id="top-bar">
                    <div class="wrap-themesflat-container">
                        <div id="top-bar-inner" class="themesflat-container">
                            <div class="top-bar-inner-wrap">
                                <div class="top-bar-content">
                                    <span class="phone content">{{$appsetting->phone}}</span>
                                    <span class="address content">{{$appsetting->address}}</span>
                                    <span class="email content">{{$appsetting->email}}</span>
                                </div>

                                <div class="top-bar-content-right">
                                    <div class="top-bar-socials">
                                        <div class="inner">
                                            <span class="choose-service"><a>اختر خدمتك الآن</a></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Header -->
                <header id="site-header">
                    <div class="wrap-themesflat-container">
                        <div id="site-header-inner" class="themesflat-container">

                            <div class="wrap-inner">
                                <img class="menulogo" src="{{asset('users/images/'.$appsetting->logo)}}">
                                <div class="mobile-button"><span></span>

                                </div>

                                <nav id="main-nav" class="main-nav">
                                    <ul id="menu-primary-menu" class="menu">

                                        <li class="menu-item  @if($page == 'home') current-menu-item @endif">
                                            <a href="{{asset('/')}}">الرئيسية</a>
                                        </li>
                                        <li class="menu-item menu-item-has-children @if($page == 'aboutus') current-menu-item @endif">
                                            <a href="{{asset('/aboutus')}}">من نحن</a>
                                        </li>
                                        <li class="menu-item menu-item-has-children @if($page == 'services') current-menu-item @endif">
                                            <a href="{{asset('services')}}">خدماتنا</a>
                                            <ul class="sub-menu">  
                                                @foreach($services as $service)
                                                    <li class="menu-item"><a href="{{asset('services/'.$service->id)}}">{{$service->service}}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                        </li>

                                        <li class="menu-item   menu-item-has-children @if($page == 'works') current-menu-item @endif">
                                            <a href="{{asset('works')}}">أعمالنا</a>
                                            <ul class="sub-menu">  
                                                @foreach($works as $work)
                                                    <li class="menu-item"><a href="{{asset('works/'.$work->id)}}">{{$work->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li class="menu-item menu-item-has-children @if($page == 'blog') current-menu-item @endif">
                                            <a href="{{asset('/blog')}}">المدونة</a>
                                        </li>
                                        <li class="megamenu col-4 menu-item menu-item-has-children @if($page == 'contactus') current-menu-item @endif">
                                            <a href="{{asset('/contactus')}}">اتصل بنا</a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>


                        </div>

                    </div>
                </header>
            </div>
            
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">
                                @if($page == 'services')
                                    <?php 
                                        $servicesliders =   DB::table('sliders')->where('suspensed',0)->where('type',1)->where('type_id',$pageID)->get();
                                    ?>
                                    
                                    <!-- SLIDER -->
                                        <div class="rev_slider_wrapper fullwidthbanner-container">

                                            <div id="rev-slider1" class="rev_slider fullwidthabanner"> 
                                                
                                                <div class="social-flex">
                                                    <div class="line"></div>
                                                        @if($appsetting->facebook  != null)<a target="_blank" href="{{$appsetting->facebook}}"><i class="icon finance-icon-Facebook"></i></a>@endif
                                                        @if($appsetting->twitter   != null)<a target="_blank" href="{{$appsetting->twitter}}" ><i class="icon finance-icon-Twitter"></i></a>@endif
                                                        @if($appsetting->instagram  != null)<a target="_blank" href="{{$appsetting->instagram}}" ><i class="icon finance-icon-instagram"></i></a>@endif
                                                        @if($appsetting->youtube   != null)<a target="_blank" href="{{$appsetting->youtube}}" ><i class="flat-icon-youtube"></i></a>@endif
                                                    <div class="line"></div>
                                                </div>
                                                <img class="mylogo" src="{{asset('users/images/'.$appsetting->logo)}}">
                                                
                                                <ul>
                                                    @foreach($servicesliders as $slider)
                                                        <li data-transition="random">

                                                            <!-- Main Image -->
                                                            <img src="{{asset('users/images/'.$slider->slider)}}" alt="" data-bgposition="center center" data-no-retina>

                                                            <!-- Layers -->
                                                            <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-right" data-x="['right','right','right','right']" data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-12','-12','-12','-30']" data-fontsize="['52','52','50','28']" data-lineheight="['66','66','60','35']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                            {{$slider->slogan}}
                                                            </div>

                                                            <div class="tp-caption sub-title text-white text-right" data-x="['right','right','right','right']" data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['104','104','104','57']" data-fontsize="['20','20','18','16']" data-lineheight="['34','34','34','25']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                                {{$slider->shortdesc}}
                                                            </div>

                                                            <div class="tp-caption text-right" data-x="['right','right','right','right']" data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['193','193','193','140']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                                <a href="{{asset('contactus')}}" style="position: relative;cursor: pointer">
                                                                    <p style="position: absolute;z-index: 1;top: 20%; right: 80px;width: 150px">احجز خدمتك الآن</p>
                                                                    <img src="{{asset('users/assets/img/service/service-add.png')}}">
                                                                </a>
                                                            </div>
                                                        </li>
                                                    @endforeach


                                                </ul>


                                            </div>
                                        </div>
                                    <!-- END SLIDER -->

                                @elseif($page == 'works')
                                    <?php 
                                        $worksliders = DB::table('sliders')->where('suspensed',0)->where('type',2)->where('type_id',$pageID)->get();
                                    ?>
                                    
                                    <!-- SLIDER -->
                                        <div class="rev_slider_wrapper fullwidthbanner-container">

                                            <div id="rev-slider1" class="rev_slider fullwidthabanner"> 
                                                
                                                <div class="social-flex">
                                                    <div class="line"></div>
                                                        @if($appsetting->facebook  != null)<a target="_blank" href="{{$appsetting->facebook}}"><i class="icon finance-icon-Facebook"></i></a>@endif
                                                        @if($appsetting->twitter   != null)<a target="_blank" href="{{$appsetting->twitter}}" ><i class="icon finance-icon-Twitter"></i></a>@endif
                                                        @if($appsetting->instagram  != null)<a target="_blank" href="{{$appsetting->instagram}}" ><i class="icon finance-icon-instagram"></i></a>@endif
                                                        @if($appsetting->youtube   != null)<a target="_blank" href="{{$appsetting->youtube}}" ><i class="flat-icon-youtube"></i></a>@endif
                                                    <div class="line"></div>
                                                </div>
                                                <img class="mylogo" src="{{asset('users/images/'.$appsetting->logo)}}">
                                                
                                                <ul>
                                                    @foreach($worksliders as $slider)
                                                        <li data-transition="random">

                                                            <!-- Main Image -->
                                                            <img src="{{asset('users/images/'.$slider->slider)}}" alt="" data-bgposition="center center" data-no-retina>

                                                            <!-- Layers -->
                                                            <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-right" data-x="['right','right','right','right']" data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-12','-12','-12','-30']" data-fontsize="['52','52','50','28']" data-lineheight="['66','66','60','35']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                            {{$slider->slogan}}
                                                            </div>

                                                            <div class="tp-caption sub-title text-white text-right" data-x="['right','right','right','right']" data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['104','104','104','57']" data-fontsize="['20','20','18','16']" data-lineheight="['34','34','34','25']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                                {{$slider->shortdesc}}
                                                            </div>

                                                            <div class="tp-caption text-right" data-x="['right','right','right','right']" data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['193','193','193','140']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                                <a href="{{asset('contactus')}}" style="position: relative;cursor: pointer">
                                                                    <p style="position: absolute;z-index: 1;top: 20%; right: 80px;width: 150px">احجز خدمتك الآن</p>
                                                                    <img src="{{asset('users/assets/img/service/service-add.png')}}">
                                                                </a>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>


                                            </div>
                                        </div>
                                    <!-- END SLIDER -->
                                @else 
                                    <!-- SLIDER -->
                                        <div class="rev_slider_wrapper index-slider fullwidthbanner-container">

                                            <div id="rev-slider1" class="rev_slider fullwidthabanner">
                                                <div class="formflex">
                                                    <div style="background-image: url({{asset('users/assets/img/slider/formbg-01.png')}});" class="side">
                                                        <img class="mylogo-white" src="{{asset('users/assets/img/whitelogo.png')}}">
                                                    </div>
                                                    <div class="flexside">
                                                        <div>
                                                            <p>اختر خدمتك الان</p>
                                                            <p>وسيقوم احد <span>مندوبينا</span> بالتواصل معك</p>
                                                        </div>

                                                        {!! Form::open(array('method' => 'post','url' =>'addorder')) !!}
                                                            <input type="text" name="name" required  placeholder="الاسم">
                                                            <input type="text" name="phone" required placeholder="رقم الجوال">
                                                            <input type="email" name="email" required placeholder="البريد الالكتروني">
                                                            
                                                            <select name="service" id="slt-1">
                                                                <option selected required>اختر الخدمة</option>
                                                                @foreach($services as $service)
                                                                    <option value="{{$service->id}}">{{$service->service}}</option>
                                                                @endforeach
                                                            </select>

                                                            <button type="submit" class="sendServ">إرسال</button>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                                <div class="social-flex">
                                                    <div class="line"></div>
                                                        @if($appsetting->facebook  != null)<a target="_blank" href="{{$appsetting->facebook}}"><i class="icon finance-icon-Facebook"></i></a>@endif
                                                        @if($appsetting->twitter   != null)<a target="_blank" href="{{$appsetting->twitter}}" ><i class="icon finance-icon-Twitter"></i></a>@endif
                                                        @if($appsetting->instagram  != null)<a target="_blank" href="{{$appsetting->instagram}}" ><i class="icon finance-icon-instagram"></i></a>@endif
                                                        @if($appsetting->youtube   != null)<a target="_blank" href="{{$appsetting->youtube}}" ><i class="flat-icon-youtube"></i></a>@endif
                                                    <div class="line"></div>
                                                </div>
                                                <img class="mylogo" src="{{asset('users/images/'.$appsetting->logo)}}">
                                                
                                                <ul>
                                                    @foreach($sliders as $slider)
                                                        <li data-transition="random">

                                                            <!-- Main Image -->
                                                            <img src="{{asset('users/images/'.$slider->slider)}}" alt="" data-bgposition="center center" data-no-retina>

                                                            <!-- Layers -->
                                                            <div class="tp-caption tp-resizeme text-white font-heading font-weight-700 text-right" data-x="['right','right','right','right']" data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-12','-12','-12','-30']" data-fontsize="['52','52','50','28']" data-lineheight="['66','66','60','35']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                            {{$slider->slogan}}
                                                            </div>

                                                            <div class="tp-caption sub-title text-white text-right" data-x="['right','right','right','right']" data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['104','104','104','57']" data-fontsize="['20','20','18','16']" data-lineheight="['34','34','34','25']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                                {{$slider->shortdesc}}
                                                            </div>

                                                            <div class="tp-caption text-right" data-x="['right','right','right','right']" data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['193','193','193','140']" data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                                                <a href="{{asset('contactus')}}" style="position: relative;cursor: pointer">
                                                                    <p style="position: absolute;z-index: 1;top: 20%; right: 80px;width: 150px">احجز خدمتك الآن</p>
                                                                    <img src="{{asset('users/assets/img/service/service-add.png')}}">
                                                                </a>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>


                                            </div>
                                        </div>
                                    <!-- END SLIDER -->
                                @endif
                                @yield('content')
                            </div>
                        </div><!--End #inner-content -->
                    </div><!--End #site-content -->
                </div><!--End #content-wrap -->
            </div>
            
            
            <!-- Footer -->
            <img class="foot-image" src="{{asset('users/images/'.$appsetting->logo)}}">
            <footer  id="footer" style="background-image: url({{asset('users/images/'.$appsetting->footerbgimage)}})">
                <div id="footer-widgets" class="themesflat-container title-style-1">
                    <div class="themesflat-row gutter-30">
                        <div class="span_1_of_5 col">
                            <div class="widget widget_text padding-left-7">
                                <div class="textwidget footflex">
                                    <p class="margin-bottom-22">
                                        <img class="logo-footer-image" src="{{asset('users/images/'.$appsetting->logo)}}" width="226" height="50" alt="Finance" data-retina="assets/img/logo.png" data-width="226" data-height="50">
                                    </p>
                                    <div>
                                        <p class="sendus"> يمكنك مراسلتنا على البريد الإلكتروني</p>
                                        <p class="sendus"><a> {{$appsetting->email}} </a></p>
                                    </div>

                                </div>
                            </div><!-- /.widget_text -->


                        </div><!-- /.span_1_of_5 -->

                        <div class="span_1_of_5 col">
                            <div class="widget widget_tag_cloud margin-top-6 padding-left-9">
                                <h2 class="widget-title margin-bottom-43"><span>شاركنا عبر الميديا</span></h2>
                                <div class="tagcloud social-tag">
                                    <div>
                                        @if($appsetting->facebook != null) <a target="_blank" href="{{$appsetting->facebook}}"><i class="icon finance-icon-Facebook"></i></a>@endif
                                        @if($appsetting->twitter  != null)  <a target="_blank" href="{{$appsetting->twitter}}" ><i class="icon finance-icon-Twitter"></i></a>@endif
                                    </div>
                                    <div>
                                       @if($appsetting->instagram != null) <a target="_blank" href="{{$appsetting->instagram}}"><i class="icon finance-icon-instagram"></i></a>@endif
                                       @if($appsetting->youtube  != null)  <a target="_blank" href="{{$appsetting->youtube}}"><i class="flat-icon-youtube"></i></a>@endif
                                    </div>
                                </div>
                            </div><!-- /.widget_tag_cloud -->
                        </div><!-- /.span_1_of_5 -->

                        <div class="span_1_of_5 col">
                            <div class="widget widget_tag_cloud margin-top-6 padding-left-9">
                                <h2 class="widget-title margin-bottom-43"><span>الدعم</span></h2>
                                <div class="tagcloud social-tag">
                                    
                                    <div class="callflex phone-no">
                                        <i class="icon-phone call"></i>
                                        <a href="#"> <span>{{$appsetting->phone}}</span></a>

                                    </div>
                                    
                                    <div class="callflex phone-no">
                                        <i class="icon-watsapp call"></i>
                                        <a href="#"><span>{{$appsetting->whatsapp}}</span></a>

                                    </div>

                                </div>
                            </div><!-- /.widget_tag_cloud -->
                        </div><!-- /.span_1_of_5 -->
                        
                        <div class="span_1_of_5 col">
                            <div class="widget widget_tag_cloud margin-top-6 padding-left-9">
                                <h2 class="widget-title margin-bottom-43"><span>خدمات أكسب</span></h2>
                                <div class="tagcloud social-tag">
                                    
                                    @foreach($services as $service)
                                        <div class="callflex">
                                            <a href="{{asset('/services/'.$service->id)}}"> <span> {{$service->service}} </span></a>
                                        </div>
                                    @endforeach
                                
                                </div>
                            </div><!-- /.widget_tag_cloud -->
                        </div><!-- /.span_1_of_5 -->
                       
                        <div class="span_1_of_5 col">
                            <div class="widget widget_flickr margin-top-6 padding-left-6">
                                <h2 class="widget-title"><span>أكسب</span></h2>
                                <div class="item sendus">
                                    <a href="{{asset('aboutus')}}">من نحن</a>
                                </div>
                                <div class="item sendus">
                                    <a href="{{asset('blog')}}">مدونة أكسب</a>
                                </div>
                            </div><!-- /.instagram-wrap -->
                        </div><!-- /.widget_instagram -->
                    </div><!-- /.span_1_of_5 -->
                </div><!-- /.themesflat-row -->
            </footer>
            <!--End #footer -->

            <!-- Bottom -->
            <div id="bottom" class="clearfix style-1">
                <div id="bottom-bar-inner" class="themesflat-container">
                    <div class="bottom-bar-inner-wrap">
                        <div class="bottom-bar-content">
                            <div id="copyright" class="padding-left-9">
                                &copy; COPYRIGHT FINANCE. <a target="_blank" href="https://www.my-protech.com/">DESIGN BY PROTECH.</a>
                            </div>
                        </div>

                        <div class="bottom-bar-menu">
                            <ul class="bottom-nav">
                                <li class="menu-item"><a href="{{asset('aboutus')}}">من نحن</a></li>
                                <li class="menu-item"><a href="{{asset('privacy')}}">سياسة الخصوصية</a></li>
                                <li class="menu-item"><a href="{{asset('policy')}}">الشروط والأحكام</a></li>
                                <li class="menu-item"><a href="{{asset('contactus')}}">اتصل بنا</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End #bottom -->
                
        </div><!--End #page -->
    </div><!--End #wrapper -->


    <a id="scroll-top"></a>
    <a  href="https://api.whatsapp.com/send?phone={{$appsetting->phone}}" class="icon-watsapp fixed-call"></a>
    
    <!-- Javascript -->
    <script src=" {{asset('users/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins.js')}}"></script>
    <script src="{{asset('users/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('users/assets/js/animsition.js')}}"></script>
    <script src="{{asset('users/assets/js/countto.js')}}"></script>
    <script src="{{asset('users/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('users/assets/js/magnific.popup.min.js')}}"></script>
    <script src="{{asset('users/assets/js/equalize.min.js')}}"></script>
    <script src="{{asset('users/assets/js/typed.js')}}"></script>
    <script src="{{asset('users/assets/js/vegas.js')}}"></script>
    <script src="{{asset('users/assets/js/shortcodes.js')}}"></script>
    <script src="{{asset('users/assets/js/main.js')}}"></script>
    
        <script>
        $('.customercomment').owlCarousel({
                loop: true,
                margin: 120,
                autoplay,true,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        $('.works').owlCarousel({
                loop: true,
                margin: 120,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        
        $('.tools').owlCarousel({
                loop: true,
                margin: 110,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 6
                    }
                }
            })
        $('.customers').owlCarousel({
                loop: true,
                margin: 110,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 6
                    }
                }
            })
    </script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZ2z7aoo8okwvyHbaxfKwUi-sblBj5QYk"></script>
    <script src="{{asset('users/assets/js/gmap3.min.js')}}"></script>

    <!-- Revolution Slider -->
    <script src="{{asset('users/includes/rev-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('users/includes/rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('users/assets/js/rev-slider.js')}}"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{asset('users/includes/rev-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('users/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('users/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('users/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('users/includes/rev-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('users/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('users/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('users/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('users/includes/rev-slider/js/extensions/revolution.extension.video.min.js')}}"></script>    
</body>

</html>