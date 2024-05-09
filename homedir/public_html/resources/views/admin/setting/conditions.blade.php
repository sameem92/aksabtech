@extends('admin.include.master')
@section('title') لوحة التحكم | الشروط والأحكام @endsection
@section('content')

  <div class="my-3 my-md-5">
    <div class="container">
      <div dir="rtl" class="page-header">
        <h4 class="page-title">الشروط والأحكام</h4>
      </div>
      <div class="row">
        <div class="col-12">
        {{ Form::open(array('method' => 'patch','class' => 'card','url' => 'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/conditions/'.$policy->id )) }}
        
            <div dir="rtl" class="card-header">
              <h3 dir="rtl" class="card-title"> تعديل الشروط والأحكام</h3>
            </div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-12">

                    <!-- editor -->
                        <div style="margin-bottom: 5%;" class="col-md-12">
                            <div class="box box-info">
                                <div  class="box-header text-center">  
                                    <h3  class="box-title"> الشروط والأحكام </h3>
                                </div>
                                <div class="box-body pad">
                                    <textarea id="editor1" name="policy" rows="10" cols="80" required>{!! $policy->policy !!}</textarea>
                                    @if ($errors->has('policy'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('policy') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="btn-list text-center">
                            <button type="submit" class="btn btn-primary col-md-4">تعديل</button>
                        </div>

                </div>
              </div>
            </div>

        {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>

@endsection 