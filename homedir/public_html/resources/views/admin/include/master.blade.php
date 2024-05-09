<!doctype html>
<html lang="en" dir="rtl">

    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>  
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-TileColor" content="#0061da">
        <meta name="theme-color" content="#1643a3">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <link rel="icon" href="../favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
        <link rel="stylesheet" href="{{asset('admin/assets/fonts/fonts/font-awesome.min.css')}}"> 
		  
         <!-- Font family --> 
         <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
          <!-- Sidemenu Css --> 
          <link href="{{asset('admin/assets/plugins/fullside-menu/css/dark-side-style.css')}}" rel="stylesheet">
          <link href="{{asset('admin/assets/plugins/fullside-menu/waves.min.css')}}" rel="stylesheet"> 
          <!-- Dashboard Css --> 
          <link href="{{asset('admin/assets/css/dark-left-menu.css')}}" rel="stylesheet"> 
          <!-- c3.js Charts Plugin --> 
          <link href="{{asset('admin/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"> 
          <!-- Custom scroll bar css--> 
          <link href="{{asset('admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"> 
          <!---Font icons--> 
          <link href="{{asset('admin/assets/plugins/iconfonts/plugin.css')}}" rel="stylesheet"> 
		  <!-- Data table css -->
		  <link href="{{asset('admin/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		  <!-- bootstrap wysihtml5 - text editor -->
		  <script src=" {{asset('admin/assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
          <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    </head>
    
	<body class="" >
		<div id="global-loader" ></div>
		<div class="page">			
			<div class="page-main">
			
				<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">

							<a class="header-brand" href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0')}}">
								<img src="{{asset('users/images/'.$logo)}}" class="header-brand-img" alt="nad logo">
							</a>

							<div class="menu-toggle-button">
								<a class="nav-link wave-effect" href="#" id="sidebarCollapse">
									<span class="fa fa-bars"></span>
								</a>
							</div>

							
							<div class="d-flex order-lg-2 ml-auto">

								<div class="dropdown mt-1">
									<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
										<span class="avatar avatar-md brround" style="background-image: url({{asset('users/images/'.auth()->guard('admin')->user()->image)}})"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center font-weight-sembold user">{{auth()->guard('admin')->user()->username}}</a>
												@if(auth()->guard('admin')->user()->id == 1) 
													<span class="text-center user-semi-title text-dark" >الأدمن</span>
												@else 
													<span class="text-center user-semi-title text-dark" >مطور الموقع</span>
												@endif
											<div class="dropdown-divider"></div>
										</div>
										@if(auth()->guard('admin')->user()->id == 1) 
											<a class="dropdown-item" href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/provider/". auth()->guard('admin')->user()->id )}}/edit'>
												<i class="dropdown-icon mdi mdi-account-outline "></i> الصفحة الشخصية
											</a>
											<a class="dropdown-item" href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/provider')}}">
												<i class="dropdown-icon mdi mdi-account-outline "></i> إضافة مطور
											</a>
										@else 
											<a class="dropdown-item" href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/provider/". auth()->guard('admin')->user()->id )}}/edit'>
												<i class="dropdown-icon mdi mdi-account-outline "></i> الصفحة الشخصية
											</a>
										@endif

										<a class="dropdown-item" href = "{{asset('logout')}}">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> تسجيل خروج                    
										</a>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="wrapper">

					<nav id="sidebar" class="nav-sidebar">
						<ul class="list-unstyled components" id="accordion">

							<div class="user-profile">
								<div class="dropdown user-pro-body">
									<div><img src="{{asset('users/images/'.auth()->guard('admin')->user()->image)}}" alt="user-img" class="img-circle"></div>
									<a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
									    <span class="font-weight-semibold">{{auth()->guard('admin')->user()->username}}</span>  
									</a>
									<br>
									@if(auth()->guard('admin')->user()->id == 1) 
										<span class="text-gray">الأدمن</span>
									@else 
										<span class="text-gray">مطور الموقع</span>
									@endif
									<ul class="dropdown-menu">
											@if(auth()->guard('admin')->user()->id == 1) 
												<li><a href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/provider/". auth()->guard('admin')->user()->id )}}/edit'><i class="dropdown-icon mdi mdi-account-outline "></i>الصفحة الشخصية</a></li>
												<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/provider')}}"><i class="dropdown-icon mdi mdi-account-outline "></i>إضافة مطور</a></li>
											@else 
												<li><a href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/provider/". auth()->guard('admin')->user()->id )}}/edit'><i class="dropdown-icon mdi mdi-account-outline "></i>الصفحة الشخصية</a></li>
											@endif
										    <li><a href = "{{asset('logout')}}"><i class="dropdown-icon mdi  mdi-logout-variant"></i> تسجيل الخروج</a></li>
									</ul>
								</div>
							</div>

							<li class="">
								<a href="#Submenu1" class="accordion-toggle wave-effect waves-effect waves-button collapsed" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-home mr-2"></i> الرئيسية
								</a>
								<ul class="collapse list-unstyled" id="Submenu1" data-parent="#accordion">
								    <li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/lastworks')}}">أخر أعمالنا</a></li>
								    <li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/chooseus')}}">لماذا تقوم باختيارنا؟</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/tools')}}">أدواتنا</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/statistics')}}">الإحصائيات</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/comments')}}">قالو عننا</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/clients')}}">عملأؤنا</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/packagesandoffers')}}">الباقات والعروض</a></li>
								</ul>
							</li>

							<li class="">
								<a href="#Submenu2" class="accordion-toggle wave-effect waves-effect waves-button collapsed" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-home mr-2"></i> المدونة
								</a>
								<ul class="collapse list-unstyled" id="Submenu2" data-parent="#accordion">
								    <li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/blog/create')}}">إضافة مقال جديد</a></li>
								    <li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/blog')}}">المدونة</a></li>
								</ul>
							</li>

							<li class="">
								<a href="#Submenu21" class="accordion-toggle wave-effect waves-effect waves-button collapsed" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-home mr-2"></i> الباقات
								</a>
								<ul class="collapse list-unstyled" id="Submenu21" data-parent="#accordion">
								    <li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/package/create')}}">إضافة باقة جديدة</a></li>
								    <li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/package')}}">الباقات</a></li>
								</ul>
							</li>

							<li class="">
								<a href="#Submenu3" class="accordion-toggle wave-effect waves-effect waves-button collapsed" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-home mr-2"></i> خدماتنا
								</a>
								<ul class="collapse list-unstyled" id="Submenu3" data-parent="#accordion">
								    <li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/ourservices')}}"> خدماتنا</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/service/create')}}">إضافة خدمة جديدة</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/service')}}">كل الخدمات</a></li>
								</ul>
							</li>

							<li class="">
								<a href="#Submenu4" class="accordion-toggle wave-effect waves-effect waves-button collapsed" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-home mr-2"></i> أعمالنا
								</a>
								<ul class="collapse list-unstyled" id="Submenu4" data-parent="#accordion">
								    <li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/ourworks')}}"> أعمالنا</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/work/create')}}">إضافة عمل جديدة</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/work')}}">كل الأعمال</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/myworks')}}">الأعمال التطبيقية</a></li>
								</ul>
							</li>
					        
							<li class="">
								<a href="#Submenu5" class="accordion-toggle wave-effect waves-effect waves-button collapsed" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-home mr-2"></i>إعدادات الموقع
								</a>
								<ul class="collapse list-unstyled" id="Submenu5" data-parent="#accordion">
								    <li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/orderrequests')}}">طلبات العملاء</a></li>
								    <li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/sliders')}}">سلايدر الموقع</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/privacy')}}">السياسات والخصوصية</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/conditions')}}">الشروط والأحكام</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/about')}}">من نحن</a></li>
									<li><a href="{{asset('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/setapp')}}">إعدادات الموقع</a></li>
								</ul>
							</li>
						</ul>
                    </nav>

                    <div class="page-main">
						@if(session()->has('error') )
							<div style="text-align: center;font-size: large;" class="alert alert-icon text-center alert-danger" role="alert">
								<i class="fa fa-frown-o mr-2" aria-hidden="true"></i> {{ session('error')}}
							</div>
						@endif

						@if(session()->has('success') )
							<div style="text-align: center;font-size: large;" class="alert alert-icon alert-success" role="alert">
								<i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> {{ session('success')}}
							</div>
						@endif
					    @yield('content')
					</div>
                    
				</div>
			</div>

			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                            جميع الحقوق محفوظة لموقع إكسب للبرمجيات
						</div>
					</div>
				</div>
			</footer>

		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

		<!-- Dashboard Core -->
        <script src="{{asset('admin/assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendors/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendors/selectize.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendors/jquery.tablesorter.min.js')}} "></script>
        <script src="{{asset('admin/assets/js/vendors/circle-progress.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!-- Data tables -->
		<script src="{{asset('admin/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('admin/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
     
        <!-- Fullside-menu Js--> 
        <script src="{{asset('admin/assets/plugins/fullside-menu/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/fullside-menu/waves.min.js')}}"></script>

        <!-- Charts Plugin --> 
        <script src="{{asset('admin/assets/plugins/chart/Chart.bundle.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/chart/utils.js')}}"></script>
        
		<!-- Bootstrap WYSIHTML5 -->
        <script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

        <!-- Input Mask Plugin --> 
        <script src="{{asset('admin/assets/plugins/input-mask/jquery.mask.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        
	    <!-- Datepicker js -->
		<script src="{{asset('admin/assets/plugins/date-picker/spectrum.js')}}"></script>
		<script src="{{asset('admin/assets/plugins/date-picker/jquery-ui.js')}}"></script>
		<script src="{{asset('admin/assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>

        <!-- Index Scripts --> 
        <script src="{{asset('admin/assets/js/index4.js')}}"></script>

        <!-- Custom--> 
        <script src="{{asset('admin/assets/js/custom.js')}}"></script>

		<!-- CK Editor -->
       <script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
       
		<script>
            
			$(function(e) {
				$('#example1').DataTable();
			} );

			$(function () {
				// Replace the <textarea id="editor1"> with a CKEditor
				// instance, using default configuration.
				CKEDITOR.replace('editor1')
				// bootstrap WYSIHTML5 - text editor
				$('.textarea').wysihtml5()
			});

			$(function () {
				// Replace the <textarea id="editor2"> with a CKEditor
				// instance, using default configuration.
				CKEDITOR.replace('editor2')
				// bootstrap WYSIHTML5 - text editor
				$('.textarea').wysihtml5()
			});

			$(function () {
				// Replace the <textarea id="editor2"> with a CKEditor
				// instance, using default configuration.
				CKEDITOR.replace('editor3')
				// bootstrap WYSIHTML5 - text editor
				$('.textarea').wysihtml5()
			});

		</script>

		<script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

            // filter categories
			$('#category').change(function() {
				var countval = $('#category').val();
				console.log(countval);

				$.ajax({
				type: "post" ,
				url : '{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/filtercategory")}}' ,
				data : {
					count_id: countval
				},
				success : function(data)
				{
				    $('#subcategory').html('<option value="" disabled selected>اختار التصنيف</option>');
					if(data.length!=0)
					{
						$('#subcategory').html('<option value="" disabled selected> اختار التصنيف</option>');
						for (var i = 0; i < data.length; i++) 
						{
						var option = '<option value="'+data[i].id+'">'+data[i].arcategory+'</option>' ;
						$('#subcategory').append(option);
						}
					}
					else {
						$('#subcategory').html('<option value="" selected>اختار التصنيف</option>');
					}
				},
			    });
			});
            
			//filter cities
			$('#area').change(function() {
				var countval = $('#area').val();
				console.log(countval);

				$.ajax({
				type: "post" ,
				url : '{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/filterarea")}}' ,
				data : {
					count_id: countval
				},
				    success : function(data)
				{
				$('#city').html('<option value="" disabled selected>اختار المدينة</option>');
					if(data.length!=0)
					{
						$('#city').html('<option value="" disabled selected> اختار المدينة</option>');
						for (var i = 0; i < data.length; i++) 
						{
						var option = '<option value="'+data[i].id+'">'+data[i].arname+'</option>' ;
						$('#city').append(option);
						}
					}
					else {
						$('#city').html('<option value="" selected>اختار المدينة</option>');
					}

				},
			});
			});

		</script>


  </body>
</html>