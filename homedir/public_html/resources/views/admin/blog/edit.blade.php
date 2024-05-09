@extends('admin/include/master')
@section('title') لوحة التحكم | تعديل مقالة   @endsection
@section('content')

    <div class="my-3 my-md-5">
        <div class="container">
            <div dir="rtl" class="page-header">
                <h4 class="page-title">تعديل مقالة </h4>
            </div>

            <div class="row">
                <div class="col-12">
                    {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/blog/'.$edblog->id )) }}
                        
                        <div dir="rtl" class="card-header">
                            <h3 dir="rtl" class="card-title">تعديل مقالة </h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">

                                    <div class="form-group">
                                        <label class="form-label">الصورة</label>
                                        <img class="img-fluid rounded w-25 h-25 m-2" src="{{asset('users/images/'.$edblog->image)}}" alt="slider image">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">صورة المقالة</label>
                                        <input style="width:100%;" type="file" class="form-control" name="image">
                                        @if ($errors->has('image'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">عنوان المقالة</label>
                                        <input type="text" class="form-control" name="title" value="{{ $edblog->title }}" placeholder="ادخل عتوان المقالة" required>
                                        @if ($errors->has('title'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-label">نبذة عن المقالة</label>
                                        <textarea rows="5" style="width:100%;" type="text" placeholder="نبذة عن المقالة" class="form-control" name="shortdesc"> {{ $edblog->shortdesc }}</textarea>
                                        @if ($errors->has('shortdesc'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('shortdesc') }}</div>
                                        @endif
                                    </div>

                                    <div style="margin-bottom: 5%;" class="col-md-12">
                                        <div class="box box-info">
                                            <div  class="box-header text-center">  
                                                <h3  class="box-title">محتوى المقالة</h3>
                                            </div>
                                            <div class="box-body pad">
                                                <textarea id="editor1" name="blogdesc" rows="10" cols="80" required>{!! $edblog->blogdesc !!}</textarea>
                                                @if ($errors->has('blogdesc'))
                                                    <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('blogdesc') }}</div>
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