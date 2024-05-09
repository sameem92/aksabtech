@extends('admin/include/master')
@section('title') لوحة التحكم | تعديل عمل تطبيقى   @endsection
@section('content')

    <div class="my-3 my-md-5">
        <div class="container">
            <div dir="rtl" class="page-header">
                <h4 class="page-title">تعديل عمل تطبيقى </h4>
            </div>

            <div class="row">
                <div class="col-12">
                    {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/myworks/'.$edwork->id )) }}
                        
                        <div dir="rtl" class="card-header">
                            <h3 dir="rtl" class="card-title">تعديل عمل تطبيقى </h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">

                                    <div class="form-group">
                                        <label class="form-label">الصورة</label>
                                        <img class="img-fluid rounded w-25 h-25 m-2" src="{{asset('users/images/'.$edwork->image)}}" alt="slider image">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">صورة العمل تطبيقى</label>
                                        <input style="width:100%;" type="file" class="form-control" name="image">
                                        @if ($errors->has('image'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">عنوان العمل تطبيقى</label>
                                        <input type="text" class="form-control" name="title" value="{{ $edwork->title }}" placeholder="ادخل عتوان العمل تطبيقى" required>
                                        @if ($errors->has('title'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-label">نبذة عن العمل تطبيقى</label>
                                        <textarea rows="5" style="width:100%;" type="text" placeholder="نبذة عن العمل تطبيقى" class="form-control" name="shortdesc"> {{ $edwork->shortdesc }}</textarea>
                                        @if ($errors->has('shortdesc'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('shortdesc') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">رابط العمل التطبيقى</label>
                                        <input type="text" class="form-control" name="link" value="{{ $edwork->link }}" placeholder="ادخل العمل التطبيقى" >
                                        @if ($errors->has('link'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('link') }}</div>
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