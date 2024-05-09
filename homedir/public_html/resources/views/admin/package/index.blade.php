@extends('admin/include/master')
@section('title') لوحة التحكم | الباقات  @endsection
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
                            @if(count($packages) != 0)
                                <table dir="rtl" id="example1" class="table card-table table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>الخدمة</th>
                                            <th>إسم الباقة</th>
                                            <th>سعر الباقة</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($packages as $package)
                                            <?php $serviceinfo = DB::table('services')->where('id',$package->service_id)->first(); ?>
                                            <tr>
                                                <td> {{$serviceinfo ? $serviceinfo->service : '?????'}} </td>
                                                <td> {{$package->name}} </td>
                                                <td> {{$package->price}} ريال</td>
                                                <td class="text-center">
                                                    {{ Form::open(array('method' => 'DELETE',"onclick"=>"return confirm('هل انت متأكد')",'files' => true,'url' => array('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/package/'.$package->id))) }}
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> حذف</button>
                                                    {!! Form::close() !!}
                                                <form><a href='{{asset("b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/package/".$package->id)}}/edit' class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> تعديل</a></form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else 
                                <p class="text-center">لا يوجد باقات حاليا</p>
                            @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection