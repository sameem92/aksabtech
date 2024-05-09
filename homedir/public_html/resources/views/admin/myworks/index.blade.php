@extends('admin/include/master')
@section('title') لوحة التحكم | الأعمال التطبيقية  @endsection
@section('content')

    <style> form{float : left;padding : 1%;} </style>  
    
    <div class="my-3 my-md-5">
        <div class="container">
            <div dir="rtl" class="page-header">
                <h4 class="page-title">إضافة عمل تطبيقى</h4>
            </div>

            <div class="row">
                <div class="col-12">
                    {{ Form::open(array('method' => 'POST','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/myworks' )) }}
                        
                        <div dir="rtl" class="card-header">
                            <h3 dir="rtl" class="card-title">إضافة عمل تطبيقى</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">

                                    <div class="form-group">
                                        <label class="form-label">أنواع الأعمال</label>
                                        <select class="form-control" name="work_id" required>
                                                <option value="">أختر نوع العمل</option>
                                                @foreach($allworks as $work)
                                                    <option value="{{$work->id}}"> {{$work->name}} </option>
                                                @endforeach
                                        </select>
                                        @if ($errors->has('work_id'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('work_id') }}</div>
                                        @endif
                                    </div>
                                    

                                    <div class="form-group">
                                        <label class="form-label">إسم العمل التطبيقى</label>
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="ادخل اسم العمل التطبيقى" required>
                                        @if ($errors->has('title'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-label">نبذة عن العمل التطبيقى</label>
                                        <textarea rows="5" style="width:100%;" type="text" placeholder="نبذة عن العمل التطبيقى" class="form-control" name="shortdesc"> {{ old('shortdesc') }}</textarea>
                                        @if ($errors->has('shortdesc'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('shortdesc') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">صورة العمل التطبيقى</label>
                                        <input style="width:100%;" type="file" class="form-control" name="image" required>
                                        @if ($errors->has('image'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">رابط العمل التطبيقى</label>
                                        <input type="text" class="form-control" name="link" value="{{ old('link') }}" placeholder="ادخل رابط العمل التطبيقى " >
                                        @if ($errors->has('link'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('link') }}</div>
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

@endsection