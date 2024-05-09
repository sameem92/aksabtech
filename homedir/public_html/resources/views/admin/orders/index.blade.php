@extends('admin/include/master')
@section('title') لوحة التحكم | طلبات العملاء   @endsection
@section('content')
<style>
form{float   : left;padding : 1%;}
</style>

  <div class="my-3 my-md-5">
    <div class="container">
        <div dir="rtl" class="page-header">
            <h4 class="page-title">طلبات العملاء</h4>
        </div>
    
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="card">

            <div dir="rtl" class="card-header">
              <div  class="card-title">كل الطلبات</div>
            </div>

            <div class="card-body">
            @if(count($allorders) != 0)
              <div class="table-responsive">
                <table dir="rtl" id="example1" class="table card-table table-vcenter text-nowrap">
                  <thead>
                    <tr>
                        <th>الإسم</th>
                        <th>البريد الإلكترونى</th>
                        <th>رقم الجوال</th>
                        <th>الخدمة</th>
                        <th>تفاصيل الطلب</th>
                        <th></th>
                    </tr>
                  </thead>
                    <tbody>
                        @foreach($allorders as $order)
                        <?php
                            $serviceinfo = DB::table('services')->where('id',$order->service)->first();
                        ?>
                        <tr>
                            <td>{{$order->name  }}</td>
                            <td>{{$order->email  }}</td>
                            <td>{{$order->phone }}</td>
                            <td>{{$serviceinfo ? $serviceinfo->service : '?????' }}</td>
                            
                            <td class="text-center">
                                {{ Form::open(array('method' => 'DELETE',"onclick"=>"return confirm('هل انت متأكد')",'files' => true,'url' => array('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/orderus/'.$order->id))) }}
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> حذف</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
              </div>
            @else 
                <p class="text-center">لا يوجد طلبات حاليا  </p>
            @endif
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
@endsection
