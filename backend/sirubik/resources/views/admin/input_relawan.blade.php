{{-- resources/views/admin/dashboard.blade.php --}}



@extends('adminlte::page')

@push('js')
@push('css') 

@section('title', 'Input Data Relawan')

@section('content_header')
    <h1>Input Data Relawan</h1>
@stop

@section('content')


    <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama lengkap">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jalan. RT. RW. Kelurahan.">
                </div>

                <div class="form-group">
                <label>Tanggal Lahir</label>



                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                </div>
                <!-- /.input group -->
              </div>

               <div class="form-group">
                <label>Waktu Masuk</label>

                

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                </div>
                <!-- /.input group -->
              </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">No HP</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="0812345678">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">ID Line</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="line_id">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Peran</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pengajar">
                </div>



                <div class="form-group">
                  <label for="exampleInputFile">Pass foto</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Anone Anone.</p>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop