@extends('admin/include/master')
@section('title') لوحة التحكم |  لماذا تقوم باختيارنا؟  @endsection
@section('content')

    <div class="my-3 my-md-5">
      <div class="container">
        <div class="row">
            <div class="col-12">
            {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/setapp/'.$changelogo->id )) }}
                <input type="hidden" name="chooseusbgimage">
                
                <div dir="rtl" class="card-header">
                  <h3 class="card-title">تغيير بيانات سكشن لماذا تقوم بإختيارنا</h3>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="form-group col-md-12">
                            <label class="form-label">الجملة التعريفية</label>
                            <textarea rows="5" style="width:100%;" type="text" placeholder="الجملة التعريفية" class="form-control" name="chooseustext"> {{$changelogo->chooseustext}}</textarea>
                            @if ($errors->has('chooseustext'))
                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('chooseustext') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <label class="form-label">صورة خلفية سكشن لماذا تقوم بإختيارنا</label>
                            <div style="margin-bottom: 0;" class="login-logo">
                                <img class="img-thumbnail"  src="{{asset('users/images/'.$changelogo->chooseusbgimage)}}" alt="chooseusbgimage"><br>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">صورة خلفية لماذا تقوم بإختيارنا</label>
                                <input style="width:100%;" type="file" class="form-control" name="chooseusbgimage">
                                @if ($errors->has('chooseusbgimage'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('chooseusbgimage') }}</div>
                                @endif
                            </div>
                        </div>
                        
                        <div class="btn-list text-center col-md-12 col-lg-12">
                            <button type="submit" class="btn btn-primary col-md-4">تغيير</button>
                        </div>

                    </div>
                </div>

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>

@endsection