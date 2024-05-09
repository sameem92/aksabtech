@extends('admin.include.master')
@section('title') لوحة التحكم | إضافة مطور @endsection
<style>
form{
  float: left;
  padding: 1%;
}
</style>

@section('content')

  <div class="my-3 my-md-5">
    <div class="container">
      <div class="page-header">
        <h4 class="page-title">المطورين</h4>
      </div>
      <div class="row">
        <div class="col-12">
          <form method="post" class="card">
            <div class="card-header">
              <h3 class="card-title">إضافة مطور جديد</h3>
            </div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                {{ Form::open(array('method' => 'POST','files' => true,'url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/provider' )) }}

                  <div class="form-group">
                    <label class="form-label">إسم المستخدم</label>
                    <input type="text" class="form-control" name="username" placeholder="ادخل اسم المستخدم" required>
                    @if ($errors->has('username'))
                      <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('username') }}</div>
                    @endif
                    @if(session()->has('exituser'))
                    <div style="color: crimson;font-size: 18px;" class="error">{{ session('exituser')}}</div>
                    <?php session()->forget('exituser'); ?>
                    @endif 
                  </div>

                  <div class="form-group">
                    <div class="custom-file">
                      <label class="form-label">الصورة الشخصية</label>
                      <input type="file" class="form-control" name="image">
                        @if ($errors->has('image'))
                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('image') }}</div>
                        @endif
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label class="form-label">كلمة المرور</label>
                    <input type="password" class="form-control" name="pass" placeholder="كلمة المرور" required>
                    @if ($errors->has('pass'))
                      <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('pass') }}</div>
                    @endif
                  </div>

                  <div class="form-group">
                    <label class="form-label"> اعادة كلمة المرور</label>
                    <input type="password" class="form-control" name="repass" placeholder=" اعادة كلمة المرور" required>
                    @if ($errors->has('repass'))
                      <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('repass') }}</div>
                    @endif
                  </div>

                  <div class="btn-list text-center">
                    <button type="submit" class="btn btn-primary col-md-4">إضافة</button>
                  </div>

                {!! Form::close() !!}
                  
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>

  <div class="my-3 my-md-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">المطورين</div>
            </div>

            <div class="card-body">
              <div class="table-responsive">

                <table dir="rtl" id="example1" class="table card-table table-vcenter text-nowrap">
                  <thead>
                    <tr>
                      <th>اسم المطور</th>
                      <th>الصورة الشخصية</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($providers as $provider)
                      <tr>
                        <td>{{$provider->username}}</td>
                        <td><img class="img-circle" style="width:100px; height:100px;" src="{{asset('users/images/'.$provider->image)}}" alt="" ></td>
                        <td class="text-center">
                          {{ Form::open(array('method' => 'DELETE',"onclick"=>"return confirm('هل انت متأكد')",'files' => true,'url' => array('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/provider/'.$provider->id))) }}
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> حذف</button>
                          {!! Form::close() !!}
                          <form><a href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/provider/".$provider->id)}}/edit' class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> تعديل</a></form>
                        </td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>
                
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

@endsection 