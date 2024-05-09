@extends('admin/include/master')
@section('title') لوحة التحكم |  عملاؤنا  @endsection
@section('content')

   <style> form{float : left;padding : 1%;} </style>

    <div class="my-3 my-md-5">
        <div class="container">
        <div class="row">
            <div class="col-12">
            {{ Form::open(array('method' => 'PATCH','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/setapp/'.$changelogo->id )) }}
                <input type="hidden" name="updateourclientstext">
                <div dir="rtl" class="card-header">
                    <h3 class="card-title"> تعديل الجملة التعريفية </h3>
                </div>

                <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group col-md-12">
                            <label class="form-label">الجملة التعريفية</label>
                            <textarea rows="5" style="width:100%;" type="text" placeholder="الجملة التعريفية" class="form-control" name="ourclientstext"> {{$changelogo->ourclientstext}}</textarea>
                            @if ($errors->has('ourclientstext'))
                            <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('ourclientstext') }}</div>
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

    <div class="my-3 my-md-5">
        <div class="container">
            <div dir="rtl" class="page-header">
                <h4 class="page-title">إضافة عميل جديد</h4>
            </div>

            <div class="row">
                <div class="col-12">
                    {{ Form::open(array('method' => 'POST','files' => true,'class' => 'card','url' =>'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/clients' )) }}
                        
                        <div dir="rtl" class="card-header">
                            <h3 dir="rtl" class="card-title">إضافة عميل جديد</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">

                                    <div class="form-group">
                                        <label class="form-label">شعار العميل</label>
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
                            <div  class="card-title">عملاؤنا</div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                            @if(count($clients) != 0)
                                <table dir="rtl" id="example1" class="table card-table table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>شعار العميل</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($clients as $client)
                                        <tr>
                                            <td> 
                                                <img src="{{asset('users/images/'.$client->image)}}" alt="slider image" class="h-8 w-8 bg-white"></a>
                                            </td>
                                            <td class="text-center">
                                                {{ Form::open(array('method' => 'DELETE',"onclick"=>"return confirm('هل انت متأكد')",'files' => true,'url' => array('b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/clients/'.$client->id))) }}
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> حذف</button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else 
                                <p class="text-center">لا يوجد عملاء  حاليا</p>
                            @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection