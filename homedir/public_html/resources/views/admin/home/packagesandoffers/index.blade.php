@extends('admin/include/master')
@section('title') لوحة التحكم |  الباقات والعروض  @endsection
@section('content')

   <style> form{float : left;padding : 1%;} </style>

    <div class="my-3 my-md-5">
        <div class="container">
        <div class="row">
            <div class="col-12">
            {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/setapp/'.$changelogo->id )) }}
                <input type="hidden" name="updatepackagetext">
                <div dir="rtl" class="card-header">
                    <h3 class="card-title"> تعديل الجملة التعريفية </h3>
                </div>

                <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group col-md-12">
                            <label class="form-label">الجملة التعريفية</label>
                            <textarea rows="5" style="width:100%;" type="text" placeholder="الجملة التعريفية" class="form-control" name="packagetext"> {{$changelogo->packagetext}}</textarea>
                            @if ($errors->has('packagetext'))
                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('packagetext') }}</div>
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

@endsection