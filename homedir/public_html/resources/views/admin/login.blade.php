<!doctype html>
<html lang="en" dir="ltr">  
  <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		
		<!-- Title -->
		<title>لوحة التحكم | تسجيل الدخول</title>
		<link rel="stylesheet" href="{{asset('admin/assets/fonts/fonts/font-awesome.min.css')}} ">
		
		<!-- Font Family -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
		
		<!-- Dashboard Css -->
		<link href="{{asset('admin/assets/css/dashboard.css')}}" rel="stylesheet" />
		
		<!-- c3.js Charts Plugin -->
		<link href="{{asset('admin/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />
		
		<!-- Custom scroll bar css-->
		<link href="{{asset('admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />
		
		<!---Font icons-->
		<link href="{{asset('admin/assets/plugins/iconfonts/plugin.css')}}" rel="stylesheet" />
	
  </head>
  <style>
  label , input {
    text-align:right;
  }
  </style>
	<body class="login-img">
    @if(session()->has('loginfailed') )
      <div class="alert alert-icon text-center alert-danger" role="alert">
          <i class="fa fa-frown-o mr-2" aria-hidden="true"></i> {{ session('loginfailed')}}
      </div>
    @endif
		<div id="global-loader" ></div>
		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col col-login mx-auto">
                            <div class="text-center mb-6">
								<img src="{{asset('users/images/'.$logo)}}" style="width: 50%;"  alt="logo">
							</div>
							<form class="card" method="post">
							{!! Form::open(['url' => 'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/','class' => 'card','method' => 'post']) !!}
								<div class="card-body p-6">
									<div class="card-title text-center">لوحة التحكم | تسجيل الدخول</div>
									<div class="form-group">
										<label class="form-label">اسم المستخدم</label>
										<input type="text" name="username" class="form-control" id="exampleInputEmail1"  placeholder="اسم المستخدم" required>
									</div>

									<div class="form-group">
										<label class="form-label">كلمة المرور</label>
										<input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور" required>
									</div>

								
									<div class="form-footer">
										<button type="submit" class="btn btn-primary btn-block">دخول</button>
									</div>
								</div>
								
								{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- Dashboard js -->
		<script src="{{asset('admin/assets/js/vendors/jquery-3.2.1.min.js')}} "></script>
		<script src="{{asset('admin/assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/vendors/jquery.sparkline.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/vendors/selectize.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/vendors/jquery.tablesorter.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/vendors/circle-progress.min.js')}}"></script>
		<script src="{{asset('admin/assets/plugins/rating/jquery.rating-stars.js')}}"></script>
		<!-- Custom scroll bar Js-->
		<script src="{{asset('admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		
		<!-- Custom Js-->
		<script src="{{asset('admin/assets/js/custom.js')}}"></script>
	</body>
</html>
 