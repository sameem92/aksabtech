@extends('admin/include/master')
@section('title') لوحة التحكم |  تعديل التعليق  @endsection
@section('content')

    <div class="my-3 my-md-5">
        <div class="container">
            
            <div dir="rtl" class="page-header">
                <h4 class="page-title">تعديل التعليق </h4>
            </div>

            <div class="row">
                <div class="col-12">
                    {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/comments/'.$edcomment->id )) }}
                        
                        <div dir="rtl" class="card-header">
                            <h3 dir="rtl" class="card-title">تعديل التعليق </h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                
                                    <div class="form-group">
                                        <label class="form-label">صورة العميل</label>
                                        <img class="img-fluid rounded w-25 h-25 m-2" src="{{asset('users/images/'.$edcomment->image)}}" alt="Work image">
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="lastworks">
                                        <label class="form-label">صورة العميل</label>
                                        <input style="width:100%;" type="file" class="form-control" name="image">
                                        @if ($errors->has('image'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-label">محتوى التعليق</label>
                                        <textarea rows="5" style="width:100%;" type="text" placeholder="محتوى التعليق" class="form-control" name="comment"> {{ $edcomment->comment }}</textarea>
                                        @if ($errors->has('comment'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('comment') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">إسم العميل</label>
                                        <input type="text" class="form-control" name="name" value="{{ $edcomment->name }}" placeholder="ادخل إسم العميل" required>
                                        @if ($errors->has('name'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('name') }}</div>
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