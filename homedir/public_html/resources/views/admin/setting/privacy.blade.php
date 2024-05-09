@extends('admin.include.master')
@section('title') لوحة التحكم | سياسة الخصوصية   @endsection
@section('content')


  <div class="my-3 my-md-5">
    <div class="container">
      <div dir="rtl" class="page-header">
        <h4 class="page-title">سياسة الخصوصية</h4>
      </div>
      <div class="row">
        <div class="col-12">
        {{ Form::open(array('method' => 'patch','class' => 'card','url' => 'b3k0P4XGvvy+PzGjt5qLS873ORhSE7mZ1fok9lKNit0/privacy/'.$privacy->id )) }}
            <div dir="rtl" class="card-header">
              <h3 dir="rtl" class="card-title">سياسة الخصوصية</h3>
            </div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <!-- editor -->
                      <div style="margin-bottom: 5%;" class="col-md-12">
                              <div class="box box-info">
                                  <div  class="box-header text-center">  
                                      <h3  class="box-title" > سياسة الخصوصية </h3>
                                  </div>
                                  <div class="box-body pad">
                                      <textarea id="editor1" name="privacy" rows="10" cols="80" required>{!! $privacy->privacy !!}</textarea>
                                      @if ($errors->has('privacy'))
                                          <div style="color: crimson;font-size: 18px;" class="error">{{ $errors->first('privacy') }}</div>
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