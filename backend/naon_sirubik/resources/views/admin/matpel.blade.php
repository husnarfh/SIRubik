{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Materi Pelajaran Kelas 1')
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href={{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}>
<!-- Font Awesome -->
<link rel="stylesheet" href={{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}>
<!-- Ionicons -->
<link rel="stylesheet" href={{ asset('bower_components/Ionicons/css/ionicons.min.css')}}>
<!-- DataTables -->
<link rel="stylesheet" href={{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}>
<!-- Theme style -->
<link rel="stylesheet" href={{ asset('vendor/adminlte/dist/css/AdminLTE.min.css')}}>
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href={{ asset('vendor/adminlte/dist/css/skins/_all-skins.min.css')}}>
@section('content_header')
    <h1>Indeks Materi Pelajaran</h1>
@stop

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Relawan Terdaftar</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Pelajaran</th>
                <th>Kelas</th>
                <th>Nama Materi</th>
                <th>Pengunggah</th>
                <th>Diubah Terakhir</th>
                <th>Deskripsi</th>
                <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            @php
            $materis = App\Materi::where('file_materi','=','hehe.pdf')->get();
            $i=1;
            @endphp
            @foreach ($materis as $materi)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$materi->mata_pelajaran}}</td>
              <td>{{$materi->kelas}}</td>
              <td>{{$materi->nama_materi}}</td>
              <td>{{$materi->id_uploader}}</td>
              <td>{{$materi->updated_at}}</td>
              <td>{{$materi->deskripsi}}</td>
              <td>
                <form>
                  <a href="{{$materi->file_materi}}"><button type="submit" class="btn btn-primary">Lihat Detail</button></a>
                  <hr>
                  <button type="submit" class="btn btn-danger">Hapus Materi</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          <div class="box-footer">
            <tfoot>
              <tr>
                <th>Nomor</th>
                <th>Nama Pelajaran</th>
                <th>Kelas</th>
                <th>Nama Materi</th>
                <th>Pengunggah</th>
                <th>Diubah Terakhir</th>
                <th>Deskripsi</th>
                <th>Detail</th>
              </tr>
            </tfoot>
          </div>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
@stop

@section('css')
@stop

@section('js')
<!-- DataTables -->
<script src={{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}></script>
<script src={{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@stop