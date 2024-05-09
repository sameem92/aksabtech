@extends('admin.include.master')
@section('title') لوحة التحكم | إعدادات التطبيق @endsection
@section('content')

  <div class="my-3 my-md-5">
    <div class="container">

      <div dir="rtl" class="page-header">
        <h4 class="page-title">إعدادات التطبيق</h4>
      </div>
      
      <div class="row">
          <div class="col-12">
          {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/setapp/'.$changelogo->id )) }}
              <div dir="rtl" class="card-header">
                <h3 class="card-title">تغيير اللوجو</h3>
              </div>

              <div class="card-body">
                <div class="row">

                  <div class="col-md-6 col-lg-6">
                      <label class="form-label">صورة اللوجو</label>
                      <div style="margin-bottom: 0;" class="login-logo">
                          <img class="img-thumbnail" style="height: 10%;" src="{{asset('users/images/'.$changelogo->logo)}}" alt="Logo"><br>
                      </div>
                  </div>

                  <div class="col-md-6 col-lg-6">

                      <div class="form-group">
                          <label class="form-label">لوجو  الموقع</label>
                          <input style="width:100%;" type="file" class="form-control" name="logo">
                          @if ($errors->has('logo'))
                          <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('logo') }}</div>
                          @endif
                      </div>

                    <div class="btn-list text-center">
                      <button type="submit" class="btn btn-primary col-md-4">تغيير</button>
                    </div>

                  </div>

                </div>
              </div>

          {!! Form::close() !!}
        </div>
      </div>

    </div>
  </div>

    <div class="my-3 my-md-5">
        <div class="container">
        <div class="row">
            <div class="col-12">
            {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/setapp/'.$changelogo->id )) }}
                <input type="hidden" name="updatecontactinfo">
                <div dir="rtl" class="card-header">
                <h3 class="card-title"> تعديل بيانات التواصل </h3>
                </div>

                <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">

                            <div class="form-group col-md-12">
                                <label class="form-label">البريد الإلكترونى</label>
                                <input style="width:100%;" type="text" value="{{$changelogo->email}}" placeholder="البريد الإلكترونى" class="form-control" name="email">
                                @if ($errors->has('email'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('email') }}</div>
                                @endif
                            </div>


                            <div class="form-group col-md-12">
                                <label class="form-label">رقم الهاتف</label>
                                <input style="width:100%;" type="text" value="{{$changelogo->phone}}" placeholder="رقم الهاتف" class="form-control" name="phone">
                                @if ($errors->has('phone'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>

                            <div class="form-group col-md-12">
                                <label class="form-label">رقم الواتساب</label>
                                <input style="width:100%;" type="text" value="{{$changelogo->whatsapp}}" placeholder="رقم الواتساب" class="form-control" name="whatsapp">
                                @if ($errors->has('whatsapp'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('whatsapp') }}</div>
                                @endif
                            </div>

                            <div class="form-group col-md-12">
                                <label class="form-label">العنوان</label>
                                <input style="width:100%;" type="text" value="{{$changelogo->address}}" placeholder="العنوان" class="form-control" name="address">
                                @if ($errors->has('address'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('address') }}</div>
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

    <div class="my-3 my-md-5">
        <div class="container">
        <div class="row">
            <div class="col-12">
            {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/setapp/'.$changelogo->id )) }}
                <input type="hidden" name="updatesocial">
                <div dir="rtl" class="card-header">
                <h3 class="card-title"> مواقع التواصل الاجتماعى </h3>
                </div>

                <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">

                            <div class="form-group col-md-12">
                                <label class="form-label">موقع الفيسبوك</label>
                                <input style="width:100%;" type="text" value="{{$changelogo->facebook}}" placeholder="موقع الفيسبوك" class="form-control" name="facebook">
                                @if ($errors->has('facebook'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('facebook') }}</div>
                                @endif
                            </div>


                            <div class="form-group col-md-12">
                                <label class="form-label">موقع تويتر</label>
                                <input style="width:100%;" type="text" value="{{$changelogo->twitter}}" placeholder="موقع تويتر" class="form-control" name="twitter">
                                @if ($errors->has('twitter'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('twitter') }}</div>
                                @endif
                            </div>

                            <div class="form-group col-md-12">
                                <label class="form-label">موقع الإنستجرام</label>
                                <input style="width:100%;" type="text" value="{{$changelogo->instagram}}" placeholder="موقع الإنستجرام" class="form-control" name="instagram">
                                @if ($errors->has('instagram'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('instagram') }}</div>
                                @endif
                            </div>

                             <div class="form-group col-md-12">
                                <label class="form-label">موقع يوتيوب</label>
                                <input style="width:100%;" type="text" value="{{$changelogo->youtube}}" placeholder="موقع يوتيوب" class="form-control" name="youtube">
                                @if ($errors->has('youtube'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('youtube') }}</div>
                                @endif
                            </div>


                            <div class="form-group col-md-12">
                                <label class="form-label">لينك التطبيق ع جوجل بلاى (اندرويد)</label>
                                <input style="width:100%;" type="text" value="{{$changelogo->googleplay}}" placeholder="لينك التطبيق ع جوجل بلاى (اندرويد)" class="form-control" name="googleplay">
                                @if ($errors->has('googleplay'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('googleplay') }}</div>
                                @endif
                            </div>

                            <div class="form-group col-md-12">
                                <label class="form-label">لينك التطبيق ع ابل ستور (ايفون)</label>
                                <input style="width:100%;" type="text" value="{{$changelogo->applestore}}" placeholder="لينك التطبيق ع ابل ستور (ايفون)" class="form-control" name="applestore">
                                @if ($errors->has('applestore'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('applestore') }}</div>
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

    <div class="my-3 my-md-5">
      <div class="container">
        <div class="row">
            <div class="col-12">
            {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/setapp/'.$changelogo->id )) }}
                <input type="hidden" name="mainimage">
                <div dir="rtl" class="card-header">
                  <h3 class="card-title">تغيير صورة خلفية سكشن الفوتر</h3>
                </div>

                <div class="card-body">
                  <div class="row">

                    <div class="col-md-6 col-lg-6">
                        <label class="form-label">صورة خلفية سكشن الفوتر</label>
                        <div style="margin-bottom: 0;" class="login-logo">
                            <img class="img-thumbnail"  src="{{asset('users/images/'.$changelogo->footerbgimage)}}" alt="footerbgimage"><br>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">

                        <div class="form-group">
                            <label class="form-label">صورة خلفية سكشن الفوتر</label>
                            <input style="width:100%;" type="file" class="form-control" name="footerbgimage">
                            @if ($errors->has('footerbgimage'))
                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('footerbgimage') }}</div>
                            @endif
                        </div>

                      <div class="btn-list text-center">
                        <button type="submit" class="btn btn-primary col-md-4">تغيير</button>
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