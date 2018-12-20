@extends('adminlte::page')

@push('js')
@push('css') 

@section('title', 'Indeks Relawan Terdaftar')
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
    <h1>Indeks Relawan Terdaftar</h1>
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
              <th>Foto</th>
              <th>Nama Lengkap</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Waktu Masuk/Diterima</th>
              <th>Nomor HP</th>
              <th>Id Line</th>
              <th>Pengaturan</th>
            </tr>
          </thead>
          <tbody>
            @php
            $relawans = App\Relawan::where('role','=','knight')->get();
            $i=1;
            @endphp
            @foreach ($relawans as $relawan)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$relawan->image}}</td>
              <td>{{$relawan->nama_lengkap}}</td>
              <td>{{$relawan->email}}</td>
              <td>{{$relawan->alamat}}</td>
              <td>{{$relawan->tempat_lahir}}</td>
              <td>{{$relawan->tanggal_lahir}}</td>
              <td>{{$relawan->waktu_masuk}}</td>
              <td>{{$relawan->no_hp}}</td>
              <td>{{$relawan->id_line}}</td>
              <td>
                <form>
                  <a href="{{$relawan->cv}}"><button type="submit" class="btn btn-primary">Lihat Detail</button></a>
                  <hr>
                  <button type="submit" class="btn btn-danger">Hapus Keanggotaan</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          <div class="box-footer">
            <tfoot>
              <tr>
                <th>Nomor</th>
                <th>Foto</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Waktu Masuk/Diterima</th>
                <th>Nomor HP</th>
                <th>Id Line</th>
                <th>Pengaturan</th>
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
</div>
<!-- /.row -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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