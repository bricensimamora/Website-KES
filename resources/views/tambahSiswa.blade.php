@extends('layout/template')
@section('title', 'tambah siswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3"> Tambah Siswa</h2>
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
                    <label for="Agama" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="Alamat" name="tk_agama" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggalLahir" name="tk_tanggalLahir" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
  
            </form>
        </div>
    </div>
</div>

@endsection