@extends('layout/template')
@section('title', 'Pengurus');
@section('container')
  <body>
    <div class="container my-3">
      <h2>PENGURUS KES</h2>
      <div class="container">
        <div class="mt-3">
            <div class="row">
                <div class="col">
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
                      <tr>
                      <th scope="row"> <?= $k++; ?></th>
                      <td> Contoh</td>
                      <td>ok</td>
                      <td> ok</td>
                      <td>ok</td>
                      <td>ok</td>
                      <td>
                      <div class="btn-group btn-group-justified">
                          <a type="button" href="#" class="btn btn-outline-primary btn-block">Lihat</a>
                      </td>
                      </tr>
                </tbody>
                </table>
                <a href="#" class="btn btn-primary mt-3" style="justify-content: center" >Tambah Pengurus</a>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </body>
@endsection