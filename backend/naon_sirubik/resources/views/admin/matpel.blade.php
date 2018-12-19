{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Materi Pelajaran Kelas 1')

@section('content_header')
    <h1>Indeks Materi Pelajaran</h1>
@stop

@section('content')
<div class="tab-content">
  <div class="tab-pane active" id="semester_1">
    <div class="box box-primary">
        <table id="tabel_semester_1" class="table table-bordered table-striped">
          <thead>
          <tr>
              <th>Nomor</th>
              <th>Nama Pelajaran</th>
              <th>Kelas</th>
              <th>Nama Materi</th>
              <th>Pengunggah</th>
              <th>Diunggah Pada</th>
              <th>Detail</th>
          </tr>
          </thead>


{{--disini taro api yg dibutuhin
          <tbody>
              @php
                $mahasiswas = App\User::where('role','=','mahasiswa')->get();
                $i=1;
              @endphp
              @foreach ($mahasiswas as $mahasiswa)
              <tr>
                  <td>{{$i++}}</td>
                  <td>{{$mahasiswa->name}}</td>
                  <td>{{$mahasiswa->id}}</td>
                  <td>{{$mahasiswa->name}}</td>
                  <td>{{$mahasiswa->name}}</td>
                  <td>{{$mahasiswa->name}}</td>
                  <td>{{$mahasiswa->name}}</td>
                  <td>{{$mahasiswa->name}}</td>
                  <td>{{$mahasiswa->name}}</td>
                  <td>{{$mahasiswa->name}}</td>
                  <td>{{$mahasiswa->name}}</td>
                  <td>{{$mahasiswa->semester}}</td>
                  <td>
                    <div class="box-footer">
                        <a href="/jadwalMHS/{{$mahasiswa->id}}"><button type="submit" class="btn btn-primary">Lihat Detail</button></a>
                    <br>
                    <br>
                    <form action="{{route('disapproveJadwal', $mahasiswa->id)}}" method="post">{{csrf_field()}}
                      <button type="submit" class="btn btn-danger">Hapus Keanggotaan</button>
                    </form>
                  </div>
                  </td>
                </tr>
              @endforeach
          </tbody> --}}
          
          {{-- ini cuman dummy --}}

          <tbody>
              <tr>
                <td>1</td>
                <td>Matematika</td>
                <td>1</td>
                <td>Matematika Diskrit</td>
                <td>Pengajar Misterius</td>
                <td>dd/yy/mm</td>
                <td>
                  <a href="#"><button type="submit" class="btn btn-primary">Lihat Detail</button></a>
                  <br><br>
                  <form action="#" method="post">
                  <button type="submit" class="btn btn-danger">Hapus Materi</button>
                  </form>
                </td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>Matematika</td>
                  <td>2</td>
                  <td>Matematika Spatial</td>
                  <td>Pengajar Misterius</td>
                  <td>dd/yy/mm</td>
                  <td>
                    <a href="#"><button type="submit" class="btn btn-primary">Lihat Detail</button></a>
                    <br><br>
                    <form action="#" method="post">
                    <button type="submit" class="btn btn-danger">Hapus Materi</button>
                    </form>
                  </td>
                </tr>
              </tbody>
              <tfoot>
          <tr>
            <th>Nomor</th>
            <th>Nama Lengkap</th>
            <th>Id</th>
            <th>Alasan Masuk</th>
            <th>Detail</th>
          </tr>
          </tfoot>
        </tbody>
        
  </div>
  <!-- /.tab-pane -->
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')<!-- Page specific script -->
<script>
</script>
@stop