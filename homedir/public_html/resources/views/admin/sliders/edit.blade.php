@extends('admin/include/master')
@section('title') لوحة التحكم |   تعديل سلايدر الموقع  @endsection
@section('content')

    <div class="my-3 my-md-5">
        <div class="container">
        <div dir="rtl" class="page-header">
            <h4 class="page-title"> تعديل سلايدر الموقع </h4>
        </div>

        <div class="row">
            <div class="col-12">
            {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/sliders/'.$edslider->id )) }}
                <div dir="rtl" class="card-header">
                    <h3 dir="rtl" class="card-title">تعديل سلايدر الموقع</h3>
                </div>

                <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        
                        <div class="form-group">
                            <label class="form-label">الصورة</label>
                            <img class="img-fluid rounded w-25 h-25 m-2" src="{{asset('users/images/'.$edslider->slider)}}" alt="slider image">
                        </div>

                        
                        <div class="form-group">
                            <label class="form-label">رفع صورة </label>
                            <input style="width:100%;" type="file" class="form-control" name="slider">
                            @if ($errors->has('slider'))
                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('slider') }} </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="form-label">عنوان السلايدر</label>
                            <input type="text" class="form-control" name="slogan" value="{{ $edslider->slogan }}" placeholder="ادخل عنوان السلايدر" required>
                            @if ($errors->has('slogan'))
                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('slogan') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="form-label">وصف صغير للسلايدر</label>
                            <input type="text" class="form-control" name="shortdesc" value="{{ $edslider->shortdesc }}" placeholder="ادخل الوصف" required>
                            @if ($errors->has('shortdesc'))
                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('shortdesc') }}</div>
                            @endif
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