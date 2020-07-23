@extends('layout/template')
@section('title', 'Istana Pintar');
@section('container')
  <body>
    <div class="container my-3">
      <h1>ISTANA PINTAR</h1>
      <p class="lead mb-0">
        Program belajar tambahan gratis bagi pelajar Sekolah Dasar (SD) di Kecamatan Parbuluan.
      </p>
      <br>
      <h2><br></h2>
      <div class="container">
        <div class="mt-3">
            <div class="row">
                <div class="col">
                  <h1>Pengajar KES</h1>
                  <div class="mt-3">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal lahir</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Kesan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $k = 1;?>
                    @foreach($pengajar as $i)
                      <tr>
                      <th scope="row"> <?= $k++; ?></th>
                      <td> {{$i->nama}}</td>
                      <td>{{$i->alamat}}</td>
                      <td> {{$i->tanggalLahir}}</td>
                      <td>{{$i->pekerjaan}}</td>
                      <td> {{$i->kesan}}</td>
                      <td>
                      <div class="btn-group btn-group-justified">
                          <a type="button" href="#" class="btn btn-outline-primary btn-block">Lihat</a>
                      </td>
                      </tr>
                    @endforeach
                </tbody>
                </table>
                <a href="#" class="btn btn-primary mt-3" style="justify-content: center ;" >Tambah Pengajar</a>
                </div>
            </div>
        </div>
        <h2><br></h2>
        <div class="mt-3">
            <div class="row">
                <div class="col">
                  <h1>Siswa KES</h1>
                  <div class="mt-3">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal lahir</th>
                        <th scope="col">Sekolah</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $k = 1;?>
                    @foreach($siswa as $i)
                      <tr>
                      <th scope="row"> <?= $k++; ?></th>
                      <td> {{$i->nama}}</td>
                      <td>{{$i->alamat}}</td>
                      <td> {{$i->tanggalLahir}}</td>
                      <td>{{$i->sekolah}}</td>
                      <td>
                      <div class="btn-group btn-group-justified">
                          <a type="button" href="#" class="btn btn-outline-primary btn-block">Lihat</a>
                      </td>
                      </tr>
                    @endforeach
                </tbody>
                </table>
                <a href="/siswa/tambah" class="btn btn-primary mt-3" style="justify-content: center ;" >Tambah Siswa</a>
                </div>
                </div>
            </div>
        </div>
      </div>
      </div>
      </div>
      </div>
    </div>
  </body>
@endsection