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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="justify-content: center ;" >Tambah Guru</button>                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Guru</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="/siswa/tambah" method="post">
                              <?= csrf_field();?>   
                              <div class="form-group row">
                                  <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                                  <div class="col-sm-10">
                                  <input type="text" class="form-control" id="Nama" name="tk_name" autofocus required>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                                  <div class="col-sm-10">
                                  <input type="text" class="form-control" id="Alamat" name="tk_alamat" required>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="Pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                  <div class="col-sm-10">
                                  <input type="text" class="form-control" id="Pekerjaan" name="pekerjaan" required>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                  <div class="col-sm-10">
                                  <input type="date" class="form-control" id="tanggalLahir" name="tk_tanggalLahir" required>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary">Tambah</button>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="justify-content: center ;" >Tambah Siswa</button>                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Siswa</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="/siswa/tambah" method="post">
                              <?= csrf_field();?>   
                              <div class="form-group row">
                                  <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                                  <div class="col-sm-10">
                                  <input type="text" class="form-control" id="Nama" name="tk_name" autofocus required>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                                  <div class="col-sm-10">
                                  <input type="text" class="form-control" id="Alamat" name="tk_alamat" required>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="Asal Sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                                  <div class="col-sm-10">
                                  <input type="text" class="form-control" id="asalSekolah" name="asalSekolah" required>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                  <div class="col-sm-10">
                                  <input type="date" class="form-control" id="tanggalLahir" name="tk_tanggalLahir" required>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary">Tambah</button>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div> 
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