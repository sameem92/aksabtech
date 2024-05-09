@extends('front/include/master')
@section('title')  أكسب | {{$showblog->title}}  @endsection
@section('content')

    <!-- SERVICES IMAGEBOXS -->
        <div class="row-services serve">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="91" data-mobi="40" data-smobi="40"></div>
                        <div class="themesflat-headings style-2 clearfix text-center">
                            
                            <div class="themesflat-headings style-2 clearfix text-center">
                                <h2 class="heading clearfix">عنوان الخبر</h2>
                                <div class="sep clearfix"></div>
                            </div>
                                <div class="themesflat-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                            <div class="sub-Flex"> 
                                <span class="circle"></span>
                                <span class="circle big-circle"></span>
                                <p class="sub-heading clearfix">{{$showblog->title}}</p>
                                <span class="circle big-circle"></span>
                                <span class="circle"></span>
                            </div>
                            <div class="themesflat-spacer clearfix" data-desktop="30" data-mobi="30" data-smobi="30"></div>
                            
                            
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
                                                                        
                        <a  href="blog-details.html" class="col-md-12">
                            <div class="work-container">
                                <img src="{{asset('users/images/'.$showblog->image)}}"> 
                                <div class="themesflat-spacer clearfix" data-desktop="91" data-mobi="60" data-smobi="40"></div>
                            </div>
                        </a>
                                                                        
                    </div><!-- /.col-md-12 -->
                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobi="40" data-smobi="40"></div>
                    
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="40" data-mobi="40" data-smobi="40"></div>   
                        <h3 class="text-center">التفاصيل</h3>               
                        <p class="text-center"> {!! $showblog->blogdesc !!} </p>
                        
                        
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="40" data-mobi="40" data-smobi="40"></div> 
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    <!-- END SERVICES IMAGEBOXS --> 

@endsection