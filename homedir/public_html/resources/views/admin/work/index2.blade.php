@extends('admin/include/master')
@section('title') لوحة التحكم |  أعمالنا  @endsection
@section('content')

    <style> form{float : left;padding : 1%;} </style>

    <div class="my-3 my-md-5">
      <div class="container">
        <div class="row">
            <div class="col-12">
            {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/setapp/'.$changelogo->id )) }}
                <input type="hidden" name="updateworkinfo">
                
                <div dir="rtl" class="card-header">
                  <h3 class="card-title">تغيير بيانات سكشن أعمالنا</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        
                        <div class="form-group col-md-12">
                            <label class="form-label">الجملة التعريفية</label>
                            <textarea dir="rtl" rows="5" style="width:100%;" type="text" placeholder="الجملة التعريفية" class="form-control" name="worktext"> {{$changelogo->worktext}}</textarea>
                            @if($errors->has('worktext'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('worktext') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <label class="form-label"> صورة المجسم</label>
                            <div style="margin-bottom: 0;" class="login-logo">
                                <img class="img-thumbnail"  src="{{asset('users/images/'.$changelogo->workmockup)}}" alt="chooseusbgimage"><br>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">صورة المجسم</label>
                                <input style="width:100%;" type="file" class="form-control" name="workmockup">
                                @if($errors->has('workmockup'))
                                    <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('workmockup') }} </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <label class="form-label">صورة خلفية سكشن أعمالنا</label>
                            <div style="margin-bottom: 0;" class="login-logo">
                                <img class="img-thumbnail"  src="{{asset('users/images/'.$changelogo->workbgimage)}}" alt="workbgimage"><br>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">صورة خلفية أعمالنا</label>
                                <input style="width:100%;" type="file" class="form-control" name="workbgimage">
                                @if ($errors->has('workbgimage'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('workbgimage') }}</div>
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

    <div class="my-3 my-md-5">
        <div class="container">

        <div dir="rtl" class="page-header">
            <h4 class="page-title">سلايدر الموقع</h4>
        </div>

        <div class="row">
            <div class="col-12">
            {{ Form::open(array('method' => 'POST','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/sliders' )) }}
                <input type="hidden" name="type" value="2">
                <input type="hidden" name="type_id" value="0">
                <div dir="rtl" class="card-header">
                <h3 dir="rtl" class="card-title">إضافة صورة جديدة</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            
                            <div class="form-group">
                                <label class="form-label">رفع صورة </label>
                                <input style="width:100%;" type="file" class="form-control" name="slider" required>
                                @if ($errors->has('slider'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('slider') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="form-label">عنوان السلايدر</label>
                                <input type="text" class="form-control" name="slogan" value="{{ old('slogan') }}" placeholder="ادخل عنوان السلايدر" required>
                                @if ($errors->has('slogan'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('slogan') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="form-label">وصف صغير للسلايدر</label>
                                <input type="text" class="form-control" name="shortdesc" value="{{ old('shortdesc') }}" placeholder="ادخل الوصف" required>
                                @if ($errors->has('shortdesc'))
                                <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('shortdesc') }}</div>
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

    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                
                    <div class="card">

                        <div dir="rtl" class="card-header">
                            <div  class="card-title">صور سلايدر الموقع</div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                            @if(count($allsliders) != 0)
                                <table dir="rtl" id="example1" class="table card-table table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>الصورة</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allsliders as $slider)
                                        <tr>
                                            <td > <img src="{{asset('users/images/'.$slider->slider)}}" alt="slider image" class="h-8 w-8 bg-white"> </td>
                                            <td class="text-center">
                                            {{ Form::open(array('method' => 'DELETE',"onclick"=>"return confirm('هل انت متأكد')",'files' => true,'url' => array('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/sliders/'.$slider->id))) }}
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> حذف</button>
                                            {!! Form::close() !!}

                                            <form><a href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/sliders/".$slider->id)}}/edit' class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> تعديل</a></form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else 
                                <p class="text-center">لا يوجد صور سلايدر حاليا</p>
                            @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection