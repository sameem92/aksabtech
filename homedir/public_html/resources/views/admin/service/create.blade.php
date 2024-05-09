@extends('admin/include/master')
@section('title') لوحة التحكم |  إضافة خدمة  @endsection
@section('content')
   <style> form{float : left;padding : 1%;} </style>  

    <div class="my-3 my-md-5">
        <div class="container">
            <div dir="rtl" class="page-header">
                <h4 class="page-title">إضافة خدمة جديدة</h4>
            </div>

            <div class="row">
                <div class="col-12">
                    {{ Form::open(array('method' => 'POST','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/service' )) }}
                        
                        <div dir="rtl" class="card-header">
                            <h3 dir="rtl" class="card-title">إضافة خدمة جديدة</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">

                                    <div class="form-group">
                                        <input type="hidden" name="parent" value="0">
                                        <label class="form-label">إسم الخدمة</label>
                                        <input type="text" class="form-control" name="service" value="{{ old('service') }}" placeholder="ادخل إسم الخدمة" required>
                                        @if ($errors->has('service'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('service') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-label">نبذة عن الخدمة</label>
                                        <textarea rows="5" dir="rtl" style="width:100%;" type="text" placeholder="نبذة عن الخدمة" class="form-control" name="shortdesc"> {{ old('shortdesc') }}</textarea>
                                        @if ($errors->has('shortdesc'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('shortdesc') }}</div>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="hidden" name="lastworks">
                                        <label class="form-label">صورة الخدمة</label>
                                        <input style="width:100%;" type="file" class="form-control" name="image" required>
                                        @if ($errors->has('image'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="form-label">صورة مجسم السلايدر</label>
                                        <input style="width:100%;" type="file" class="form-control" name="slidermockup" required>
                                        @if ($errors->has('slidermockup'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('slidermockup') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">الجملة التعريفية للخدمة</label>
                                        <input type="text" class="form-control" name="servicetext" value="{{ old('servicetext') }}" placeholder="إدخل الجملة التعريفية للخدمة">
                                        @if ($errors->has('servicetext'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('servicetext') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">صورة مجسم الخدمة</label>
                                        <input style="width:100%;" type="file" class="form-control" name="servicemockup">
                                        @if ($errors->has('servicemockup'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('servicemockup') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">صورة خلفية الخدمة</label>
                                        <input style="width:100%;" type="file" class="form-control" name="serviceimagebg">
                                        @if ($errors->has('serviceimagebg'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('serviceimagebg') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">الجملة التعريفية لمميزات الخدمة</label>
                                        <input type="text" class="form-control" name="featuretext" value="{{ old('featuretext') }}" placeholder="إدخل الجملة التعريفية للخدمة">
                                        @if ($errors->has('featuretext'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('featuretext') }}</div>
                                        @endif
                                    </div>

                                    <div style="margin-bottom: 5%;" class="col-md-12">
                                        <div class="box box-info">
                                            <div  class="box-header text-center">  
                                                <h3  class="box-title">مميزات الخدمة</h3>
                                            </div>
                                            <div class="box-body pad">
                                                <textarea id="editor1" name="features" rows="10" cols="80" >{!! old('features') !!}</textarea>
                                                @if ($errors->has('features'))
                                                    <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('features') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">الجملة التعريفية لمراحل تنفيذ الخدمة</label>
                                        <input type="text" class="form-control" name="phasetext" value="{{ old('phasetext') }}" placeholder="إدخل الجملة التعريفية للخدمة" >
                                        @if ($errors->has('phasetext'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('phasetext') }}</div>
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