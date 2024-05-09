@extends('admin.include.master')
@section('title') لوحة التحكم @endsection
@section('content')
    

  <div class="content-area">

      <div dir="rtl" class="page-header">
        <h4 class="page-title">لوحة التحكم | إحصائيات الموقع</h4>
      </div>

      <div dir="rtl" class="row row-cards">

        <div class="col-sm-12 col-lg-4">
          <div class="card bg-primary card-img-holder text-white">
            <div class="card-body">
              <h4 class="font-weight-normal  mb-3"> طلبات العملاء 
                <i class="fa fa-cubes  fs-30 float-right"></i>
              </h4>
              <h2 id="cancelorders" class="mb-0">{{$allorderss}}</h2>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-lg-4">
          <div class="card bg-primary card-img-holder text-white">
            <div class="card-body">
              <h4 class="font-weight-normal  mb-3"> المدونة 
                <i class="fa fa-cubes  fs-30 float-right"></i>
              </h4>
              <h2 id="cancelorders" class="mb-0">{{$blogcount}}</h2>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-lg-4">
          <div class="card bg-primary card-img-holder text-white">
            <div class="card-body">
              <h4 class="font-weight-normal  mb-3"> الباقات 
                <i class="fa fa-cubes  fs-30 float-right"></i>
              </h4>
              <h2 id="cancelorders" class="mb-0">{{$packagecount}}</h2>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-lg-4">
          <div class="card bg-primary card-img-holder text-white">
            <div class="card-body">
              <h4 class="font-weight-normal  mb-3"> الخدمات 
                <i class="fa fa-cubes  fs-30 float-right"></i>
              </h4>
              <h2 id="cancelorders" class="mb-0">{{$services}}</h2>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-lg-4">
          <div class="card bg-primary card-img-holder text-white">
            <div class="card-body">
              <h4 class="font-weight-normal  mb-3"> الأعمال 
                <i class="fa fa-cubes  fs-30 float-right"></i>
              </h4>
              <h2 id="cancelorders" class="mb-0">{{$works}}</h2>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-lg-4">
          <div class="card bg-primary card-img-holder text-white">
            <div class="card-body">
              <h4 class="font-weight-normal  mb-3"> الأعمال التطبيقية 
                <i class="fa fa-cubes  fs-30 float-right"></i>
              </h4>
              <h2 id="cancelorders" class="mb-0">{{$appliedworks}}</h2>
            </div>
          </div>
        </div>

      </div>

  </div>

@endsection 