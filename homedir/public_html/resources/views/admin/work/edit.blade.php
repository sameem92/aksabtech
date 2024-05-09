@extends('admin/include/master')
@section('title') لوحة التحكم |  تعديل عمل  @endsection
@section('content')
   <style> form{float : left;padding : 1%;} </style>  

    <div class="my-3 my-md-5">
        <div class="container">
            <div dir="rtl" class="page-header">
                <h4 class="page-title">تعديل عمل </h4>
            </div>

            <div class="row">
                <div class="col-12">
                    {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/work/'.$edwork->id )) }}
                        
                        <div dir="rtl" class="card-header">
                            <h3 dir="rtl" class="card-title">تعديل عمل </h3>
                        </div>

                        <div class="card-body">
                            <div class="row">

                                <div class="form-group col-md-12 col-lg-12">
                                    <label class="form-label">إسم العمل</label>
                                    <input type="text" class="form-control" name="name" value="{{ $edwork->name }}" placeholder="ادخل إسم العمل" required>
                                    @if ($errors->has('name'))
                                    <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                
                                @if($edwork->parent != 0)
                                    <div class="form-group col-md-12">
                                        <label class="form-label">نبذة عن العمل</label>
                                        <textarea rows="5" dir="rtl" style="width:100%;" type="text" placeholder="نبذة عن العمل" class="form-control" name="shortdesc"> {{ $edwork->shortdesc }}</textarea>
                                        @if ($errors->has('shortdesc'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('shortdesc') }}</div>
                                        @endif
                                    </div>
                                @endif
                                
                                @if($edwork->parent == 0)
                                    <div class="col-md-6 col-lg-6">
                                        <label class="form-label"> صورة مجسم السلايدر</label>
                                        <div style="margin-bottom: 0;" class="login-logo">
                                            <img class="img-thumbnail" style="width:100%;height:200px;"  src="{{asset('users/images/'.$edwork->slidermockup)}}" alt="chooseusbgimage"><br>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-label">صورة مجسم السلايدر</label>
                                        <input style="width:100%;" type="file" class="form-control" name="slidermockup">
                                        @if ($errors->has('slidermockup'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('slidermockup') }}</div>
                                        @endif
                                    </div>
                                @endif

                                <div class="btn-list text-center col-md-12">
                                    <button type="submit" class="btn btn-primary col-md-4">تعديل</button>
                                </div>

                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>

@endsection