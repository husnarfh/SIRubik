{{-- resources/views/admin/dashboard.blade.php --}}



@extends('adminlte::page')

@push('js')
@push('css') 

@section('title', 'Input Data Relawan')

@section('content_header')
    <h1>Indeks Data Relawan</h1>
@stop

@section('content')
<div class="tab-content">
  <div class="tab-pane active" id="semester_1">
        <table id="tabel_semester_1" class="table table-bordered table-striped">
          <thead>
          <tr>
              <th>Nomor</th>
              <th>Foto</th>
              <th>Nama Lengkap</th>
              <th>User Id</th>
              <th>Email</th>
              <th>Password</th>
              <th>Alamat</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Waktu Masuk/Diterima</th>
              <th>Nomor HP</th>
              <th>Id Line</th>
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
                <td>IMG(OPTIONAL)</td>
                <td>Ahmad SyauqiBot1</td>
                <td>1</td>
                <td>bot1@contoh.com</td>
                <td>teks singkat</td>
                <td>paragraf gede disiniparagraf gede disiniparagraf gede disini</td>
                <td>teks singkat</td>
                <td>dd/yy/mm</td>
                <td>dd/yy/mm</td>
                <td>+62XXXXXX</td>
                <td>darkboyoki</td>
                <td>
                    <div class="box-footer">
                        <a href="#"><button type="submit" class="btn btn-primary">Lihat Detail</button></a>
                    <br>
                    <br>
                    <form action="#" method="post">{{csrf_field()}}
                      <button type="submit" class="btn btn-danger">Hapus Keanggotaan</button>
                    </form>
                  </div>
                </td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>IMG(OPTIONAL)</td>
                  <td>Ahmad SyauqiBot2</td>
                  <td>2</td>
                  <td>bot2@contoh.com</td>
                  <td>teks singkat</td>
                  <td>paragraf gede disiniparagraf gede disiniparagraf gede disini</td>
                  <td>teks singkat</td>
                  <td>dd/yy/mm</td>
                  <td>dd/yy/mm</td>
                  <td>+62XXXXXX</td>
                  <td>darkboyoki</td>
                  <td>
                      <div class="box-footer">
                          <a href="#"><button type="submit" class="btn btn-primary">Lihat Detail</button></a>
                      <br>
                      <br>
                      <form action="#" method="post">
                        <button type="submit" class="btn btn-danger">Hapus Keanggotaan</button>
                      </form>
                    </div>
                  </td>
              </tr>
          
          </tbody>

          <tfoot>
          <tr>
            <th>Nomor</th>
            <th>Foto</th>
            <th>Nama Lengkap</th>
            <th>User Id</th>
            <th>Email</th>
            <th>Password</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Waktu Masuk/Diterima</th>
            <th>Nomor HP</th>
            <th>Id Line</th>
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

@section('js')
    <script> console.log('Hi!'); </script>
@stop