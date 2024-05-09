@extends('admin/include/master')
@section('title') لوحة التحكم |  إضافة عمل  @endsection
@section('content')
   <style> form{float : left;padding : 1%;} </style>  

    <div class="my-3 my-md-5">
        <div class="container">
            <div dir="rtl" class="page-header">
                <h4 class="page-title">إضافة عمل جديد</h4>
            </div>

            <div class="row">
                <div class="col-12">
                    {{ Form::open(array('method' => 'POST','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/work' )) }}
                        
                        <div dir="rtl" class="card-header">
                            <h3 dir="rtl" class="card-title">إضافة عمل جديد</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">

                                    <div class="form-group">
                                        <label class="form-label">إسم العمل</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="ادخل إسم العمل" required>
                                        <input type="hidden" name="parent" value="0">
                                        @if ($errors->has('name'))
                                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">الجملة التعريفية للعمل</label>
                                        <input type="text" class="form-control" name="worktext" value="{{ old('worktext') }}" placeholder="إدخل الجملة التعريفية للعمل">
                                        @if ($errors->has('worktext'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('worktext') }}</div>
                                        @endif
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="form-label">صورة مجسم السلايدر</label>
                                        <input style="width:100%;" type="file" class="form-control" name="slidermockup" >
                                        @if ($errors->has('slidermockup'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('slidermockup') }}</div>
                                        @endif
                                    </div>

                                    <div class="btn-list text-center">
                                        <button type="submit" class="btn btn-primary col-md-4">إضافة</button>
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