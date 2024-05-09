@extends('admin/include/master')
@section('title') لوحة التحكم | قالو عننا  @endsection
@section('content')

   <style> form{float : left;padding : 1%;} </style>  

    <div class="my-3 my-md-5">
        <div class="container">
            <div dir="rtl" class="page-header">
                <h4 class="page-title">إضافة تعليق جديد</h4>
            </div>

            <div class="row">
                <div class="col-12">
                    {{ Form::open(array('method' => 'POST','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/comments' )) }}
                        
                        <div dir="rtl" class="card-header">
                            <h3 dir="rtl" class="card-title">إضافة تعليق جديد</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    
                                    <div class="form-group col-md-12">
                                        <label class="form-label">محتوى التعليق</label>
                                        <textarea rows="5" style="width:100%;" type="text" placeholder="محتوى التعليق" class="form-control" name="comment"> {{ old('comment') }}</textarea>
                                        @if ($errors->has('comment'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('comment') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">إسم العميل</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="ادخل إسم العميل" required>
                                        @if ($errors->has('name'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">صورة العميل</label>
                                        <input style="width:100%;" type="file" class="form-control" name="image" required>
                                        @if ($errors->has('image'))
                                        <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('image') }}</div>
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
                            <div  class="card-title">قالو عننا</div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                            @if(count($comments) != 0)
                                <table dir="rtl" id="example1" class="table card-table table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>صورة العميل</th>
                                            <th>إسم العميل</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($comments as $comment)
                                            <tr>
                                                <td><img src="{{asset('users/images/'.$comment->image)}}" alt="user image" class="h-8 w-8 bg-white"></a> </td>
                                                <td> {{$comment->name}} </td>
                                                <td class="text-center">
                                                    {{ Form::open(array('method' => 'DELETE',"onclick"=>"return confirm('هل انت متأكد')",'files' => true,'url' => array('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/comments/'.$comment->id))) }}
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> حذف</button>
                                                    {!! Form::close() !!}
                                                <form><a href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/comments/".$comment->id)}}/edit' class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> تعديل</a></form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else 
                                <p class="text-center">لا يوجد تعليقات  حاليا</p>
                            @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection