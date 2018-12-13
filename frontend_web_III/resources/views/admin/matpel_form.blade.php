{{-- resources/views/admin/dashboard.blade.php --}}



@extends('adminlte::page')

@push('js')
@push('css') 

@section('title', 'Input Data Materi')

@section('content_header')
    <h1>Input Data Materi</h1>
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
                  <label for="nama lengkap">Nama Pelajaran</label>
                  <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" placeholder="Nama lengkap">
                </div>

                <div class="form-group">
                    <label for="nama lengkap">Nama Materi</label>
                    <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" placeholder="Nama lengkap">
                  </div>


                <div class="form-group">
                  <label for="exampleInputFile">File Materi</label>
                  <input name="cv" type="file" id="exampleInputFile">
                
                  <p class="help-block">Ukuran maksimum 100 MB. Format dapat berbentuk gambar, video maupun teks.</p>
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