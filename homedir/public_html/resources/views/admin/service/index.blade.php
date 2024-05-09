@extends('admin/include/master')
@section('title') لوحة التحكم |  كل الخدمات  @endsection
@section('content')
   <style> form{float : left;padding : 1%;} </style>  
   
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">

                        <div dir="rtl" class="card-header">
                            <div  class="card-title">الخدمات</div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                            @if(count($allservices) != 0)
                                <table dir="rtl" id="example1" class="table card-table table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>صورة الخدمة</th>
                                            <th>إسم الخدمة</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allservices as $service)
                                            <tr>
                                                <td> <img src="{{asset('users/images/'.$service->image)}}" alt="blog image" class="h-8 w-8 bg-white"></a> </td>
                                                <td> {{$service->service}} </td>
                                                <td class="text-center">
                                                    {{ Form::open(array('method' => 'DELETE',"onclick"=>"return confirm('هل انت متأكد')",'files' => true,'url' => array('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/service/'.$service->id))) }}
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> حذف</button>
                                                    {!! Form::close() !!}
                                                <form><a href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/service/".$service->id)}}/edit' class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> تعديل</a></form>
                                                <form><a href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/service/".$service->id)}}' class="btn btn-info btn-sm"><i class="fa fa-eye"></i> مشاهدة</a></form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else 
                                <p class="text-center">لا يوجد خدمات حاليا</p>
                            @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection