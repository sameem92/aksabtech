@extends('admin/include/master')
@section('title') لوحة التحكم | تعديل الباقة   @endsection
@section('content')

    <div class="my-3 my-md-5">
        <div class="container">

            <div dir="rtl" class="page-header">
                <h4 class="page-title">تعديل الباقة </h4>
            </div>

            <div class="row">
                <div class="col-12">
                    {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/package/'.$edpackage->id )) }}
                        
                        <div dir="rtl" class="card-header">
                            <h3 dir="rtl" class="card-title">تعديل الباقة </h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">

                                    <div class="form-group">
                                        <label class="form-label">صورة خلفية الباقة</label>
                                        <img class="img-fluid rounded w-25 h-25 m-2" src="{{asset('users/images/'.$edpackage->bgimage)}}" alt="slider image">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">صورة خلفية الباقة</label>
                                        <input style="width:100%;" type="file" class="form-control" name="bgimage">
                                        @if ($errors->has('bgimage'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('bgimage') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">إسم الباقة</label>
                                        <input type="text" class="form-control" name="name" value="{{ $edpackage->name }}" placeholder="ادخل إسم الباقة" required>
                                        @if ($errors->has('name'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">الخدمات</label>
                                        <select class="form-control" name="service_id" required>
                                                <option value="">أختر الخدمة</option>
                                                @foreach($services as $service)
                                                    <option value="{{$service->id}}" @if($service->id == $edpackage->service_id) selected @endif> {{$service->service}} </option>
                                                @endforeach
                                        </select>
                                        @if ($errors->has('service_id'))
                                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('service_id') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-label">سعر الباقة</label>
                                        <input style="width:100%;" type="text" placeholder="ادخل سعر الباقة" value="{{ $edpackage->price }}" class="form-control" name="price">
                                        @if ($errors->has('price'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('price') }}</div>
                                        @endif
                                    </div>

                                    <div style="margin-bottom: 5%;" class="col-md-12">
                                        <div class="box box-info">
                                            <div  class="box-header text-center">  
                                                <h3  class="box-title">محتوى الباقة</h3>
                                            </div>
                                            <div class="box-body pad">
                                                <textarea id="editor1" name="packagedesc" rows="10" cols="80" required>{!! $edpackage->packagedesc !!}</textarea>
                                                @if ($errors->has('packagedesc'))
                                                    <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('packagedesc') }}</div>
                                                @endif
                                            </div>
                                        </div>
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

@endsection