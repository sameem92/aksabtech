@extends('admin.include.master')
@section('title') لوحة التحكم | تعديل مطور @endsection
@section('content')

  <div class="my-3 my-md-5">
    <div class="container">

      <div class="page-header">
        <h4 class="page-title">تعديل بيانات المطور</h4>
      </div>
      
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">الصفحة الشخصية</h3>
            </div>
            <div class="card-body">
              {{ Form::open(array('method' => 'patch','files' => true,'url' =>"b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/provider/$edprovider->id" )) }}
                <div class="row mb-2">
                  <div class="col-auto">
                    <span class="avatar brround avatar-xl" style="background-image: url({{asset('users/images/'.$edprovider->image)}})"></span>
                  </div>
                  <div class="col">
                    <h3 class="mb-1 ">{{$edprovider->username}}</h3>
                    @if($edprovider->id == 1) 
                     <p class="mb-4 ">الأدمن</p>
                    @else 
                     <p class="mb-4 ">مطور الموقع</p>
                    @endif
                  </div>
                </div>

                  <div class="form-group">
                    <div class="custom-file">
                      <label class="form-label"> تغيير الصورة الشخصية</label>
                      <input type="file" class="form-control" name="image">
                        @if ($errors->has('image'))
                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('image') }}</div>
                        @endif
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="form-label">كلمة المرور</label>
                    <input type="password" class="form-control" name="pass" placeholder="كلمة المرور" >
                    @if ($errors->has('pass'))
                      <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('pass') }}</div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label class="form-label"> اعادة كلمة المرور</label>
                    <input type="password" class="form-control" name="repass" placeholder=" اعادة كلمة المرور" >
                    @if ($errors->has('repass'))
                      <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('repass') }}</div>
                    @endif
                  </div>

                <div class="form-footer">
                  <button type="submit" class="btn btn-primary btn-block">حفظ</button>
                </div>
              {!! Form::close() !!}
            </div>
          </div>


        </div>
      </div>
    
    </div>
  </div>


@endsection 