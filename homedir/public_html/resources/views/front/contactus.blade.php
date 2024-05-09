@extends('front/include/master')
@section('title')  أكسب | إتصل بنا  @endsection
@section('content')

    <div class="themesflat-spacer clearfix" data-desktop="85" data-mobi="40" data-smobi="40"></div>
        
    <!--form-->
    <div class="row-request form-responsive-d ">
        <div class="container-fluid">
            <div class="row equalize sm-equalize-auto">   
                
                <div class="col-md-12 bg-light-grey">
                    <div class="themesflat-spacer clearfix" data-desktop="85" data-mobi="40" data-smobi="40"></div>

                    <div class="themesflat-content-box clearfix " data-margin="0% 15% 0% 15%" data-mobimargin="0% 5% 0% 5%">
                        <div class="themesflat-headings style-3 clearfix">
                            <h2 class="heading clearfix">احجز خدمتك اللآن</h2>
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
                
    <div class="themesflat-spacer clearfix" data-desktop="85" data-mobi="40" data-smobi="40"></div>

@endsection