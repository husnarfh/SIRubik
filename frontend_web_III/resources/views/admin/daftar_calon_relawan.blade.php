{{-- resources/views/admin/dashboard.blade.php --}}



@extends('adminlte::page')

@push('js')
@push('css') 

@section('title', 'Input Data Relawan')

@section('content_header')
    <h1>Data Calon Relawan</h1>
@stop

@section('content')

    @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      {{$error}}
    </div>
    @endforeach
    @endif
    <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="/admin/inputrelawan">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="email">Alamat Email</label>
                  <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                </div>

                <div class="form-group">
                  <label for="nama lengkap">Nama Lengkap</label>
                  <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" placeholder="Nama lengkap">
                </div>

                <div class="form-group">
                  <label for="Alamat">Alamat</label>
                  <input name="alamat" type="text" class="form-control" id="alamat_lengkap" placeholder="Jalan. RT. RW. Kelurahan.">
                </div>

                <div class="form-group">
                  <label for="tempat lahit">Tempat  Lahir</label>
                  <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" placeholder="Bojonggede.">
                </div>


                <div class="form-group">
                <label>Tanggal Lahir</label>



                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="tgl_lahir" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="dd/mm/yyyy">
                </div>
              </div>

               <div class="form-group">
                <label>Waktu Masuk</label>

                

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="tgl_masuk" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                </div>
              </div>


                <div class="form-group">
                  <label for="no_hp">No HP</label>
                  <input name="no_hp" type="text" class="form-control" id="no_hp" placeholder="0812345678">
                </div>


                <div class="form-group">
                  <label for="id_line">ID Line</label>
                  <input name="id_line" type="text" class="form-control" id="id_line" placeholder="line_id">
                </div>


                <div class="form-group">
                  <label for="peran">Peran</label>
                  <input name="peran" type="text" class="form-control" id="peran" placeholder="Pengajar">
                </div>



                <div class="form-group">
                  <label for="exampleInputFile">Pass foto</label>
                  <input name="image" type="file" id="exampleInputFile">

                  <p class="help-block">Anone Anone.</p>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">File cv relawan</label>
                  <input name="cv" type="file" id="exampleInputFile">
                
                  <p class="help-block">Ini file cv.</p>
                </div>
                
              </div>

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