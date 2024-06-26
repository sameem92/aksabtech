@extends('admin/include/master')
@section('title') لوحة التحكم | المدونة  @endsection
@section('content')

    <style> form{float : left;padding : 1%;} </style>  

    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">

                        <div dir="rtl" class="card-header">
                            <div  class="card-title">المدونة</div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                            @if(count($blogs) != 0)
                                <table dir="rtl" id="example1" class="table card-table table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>صورة المقالة</th>
                                            <th>عنوان المقالة</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($blogs as $blog)
                                            <tr>
                                                <td><img src="{{asset('users/images/'.$blog->image)}}" alt="blog image" class="h-8 w-8 bg-white"></a> </td>
                                                <td> {{$blog->title}} </td>
                                                <td class="text-center">
                                                    {{ Form::open(array('method' => 'DELETE',"onclick"=>"return confirm('هل انت متأكد')",'files' => true,'url' => array('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/blog/'.$blog->id))) }}
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> حذف</button>
                                                    {!! Form::close() !!}
                                                <form><a href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/blog/".$blog->id)}}/edit' class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> تعديل</a></form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else 
                                <p class="text-center">لا يوجد مقالات حاليا</p>
                            @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection