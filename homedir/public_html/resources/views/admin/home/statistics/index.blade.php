@extends('admin/include/master')
@section('title') لوحة التحكم | الإحصائيات  @endsection
@section('content')

    <div class="my-3 my-md-5">
      <div class="container">
        <div class="row">
            <div class="col-12">
            {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/setapp/'.$changelogo->id )) }}
                <input type="hidden" name="stuffbgimage">
                <div dir="rtl" class="card-header">
                  <h3 class="card-title">تغيير صورة خلفية سكشن الاحصائيات</h3>
                </div>

                <div class="card-body">
                  <div class="row">
                    
                    <div class="form-group col-md-12">
                        <label class="form-label">عدد العملاء</label>
                        <input style="width:100%;" type="text" value="{{$changelogo->clientscount}}" placeholder="عدد العملاء" class="form-control" name="clientscount">
                        @if ($errors->has('clientscount'))
                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('clientscount') }}</div>
                        @endif
                    </div>

                    <div class="form-group col-md-12">
                        <label class="form-label">عدد المشروعات</label>
                        <input style="width:100%;" type="text" value="{{$changelogo->projectscount}}" placeholder="عدد المشروعات" class="form-control" name="projectscount">
                        @if ($errors->has('projectscount'))
                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('projectscount') }}</div>
                        @endif
                    </div>

                    <div class="form-group col-md-12">
                        <label class="form-label">عدد سنين الخبرة</label>
                        <input style="width:100%;" type="text" value="{{$changelogo->experiencecount}}" placeholder="عدد الخبرة" class="form-control" name="experiencecount">
                        @if ($errors->has('experiencecount'))
                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('experiencecount') }}</div>
                        @endif
                    </div>

                    <div class="form-group col-md-12">
                        <label class="form-label">عدد الموظفين</label>
                        <input style="width:100%;" type="text" value="{{$changelogo->employeecount}}" placeholder="عدد الموظفين" class="form-control" name="employeecount">
                        @if ($errors->has('employeecount'))
                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('employeecount') }}</div>
                        @endif
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <label class="form-label">صورة خلفية سكشن الاحصائيات</label>
                        <div style="margin-bottom: 0;" class="login-logo">
                            <img class="img-thumbnail"  src="{{asset('users/images/'.$changelogo->stuffbgimage)}}" alt="stuffbgimage"><br>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">صورة خلفية سكشن الاحصائيات</label>
                            <input style="width:100%;" type="file" class="form-control" name="stuffbgimage">
                            @if ($errors->has('stuffbgimage'))
                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('stuffbgimage') }}</div>
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