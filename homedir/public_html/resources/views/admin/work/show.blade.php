@extends('admin/include/master')
@section('title') لوحة التحكم |  مشاهدة تفاصيل العمل  @endsection
@section('content')

    <style> form{float : left;padding : 1%;} </style>
    
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">

                        <div dir="rtl" class="card-header">
                            <div  class="card-title">الأعمال التطبيقية</div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                            @if(count($allappliedworks) != 0)
                                <table dir="rtl" id="example1" class="table card-table table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>صورة المقالة</th>
                                            <th>عنوان المقالة</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allappliedworks as $work)
                                            <tr>
                                                <td><img src="{{asset('users/images/'.$work->image)}}" alt="blog image" class="h-8 w-8 bg-white"></a> </td>
                                                <td> {{$work->title}} </td>
                                                <td class="text-center">
                                                    {{ Form::open(array('method' => 'DELETE',"onclick"=>"return confirm('هل انت متأكد')",'files' => true,'url' => array('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/myworks/'.$work->id))) }}
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> حذف</button>
                                                    {!! Form::close() !!}
                                                <form><a href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/myworks/".$work->id)}}/edit' class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> تعديل</a></form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else 
                                <p class="text-center">لا يوجد أعمال تطبيقية حاليا</p>
                            @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="my-3 my-md-5">
        <div class="container">

        <div dir="rtl" class="page-header">
            <h4 class="page-title">سلايدر  {{$showwork->name}}</h4>
        </div>

        <div class="row">
            <div class="col-12">
            {{ Form::open(array('method' => 'POST','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/sliders' )) }}
                <input type="hidden" name="type" value="2">
                <input type="hidden" name="type_id" value="{{$showwork->id}}">
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
    
    <div class="my-3 my-md-5">
        <div class="container">
            <div dir="rtl" class="page-header">
                <h4 class="page-title"> الأعمال الفرعية - {{$showwork->name}}</h4>
            </div>

            <div class="row">
                <div class="col-12">
                    {{ Form::open(array('method' => 'POST','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/work' )) }}
                                        
                        <div dir="rtl" class="card-header">
                            <h3 dir="rtl" class="card-title">إضافة عمل فرعية</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <input type="hidden" name="parent" value="{{$showwork->id}}">
                                    <div class="form-group">
                                        <label class="form-label">إسم العمل</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="ادخل إسم العمل" required>
                                        @if ($errors->has('name'))
                                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-label">نبذة عن العمل</label>
                                        <textarea rows="5" dir="rtl" style="width:100%;" type="text" placeholder="نبذة عن العمل" class="form-control" name="shortdesc"> {{ old('shortdesc') }}</textarea>
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
                            <div  class="card-title">الأعمال الفرعية</div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                            @if(count($allworks) != 0)
                                <table dir="rtl" id="example1" class="table card-table table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>إسم العمل</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allworks as $work)
                                            <tr>
                                                <td> {{$work->name}} </td>
                                                <td class="text-center">
                                                    {{ Form::open(array('method' => 'DELETE',"onclick"=>"return confirm('هل انت متأكد')",'files' => true,'url' => array('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/work/'.$work->id))) }}
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> حذف</button>
                                                    {!! Form::close() !!}
                                                <form><a href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/work/".$work->id)}}/edit' class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> تعديل</a></form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else 
                                <p class="text-center">لا يوجد أعمال حاليا</p>
                            @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection