@extends('layout/template')
@section('title', 'Buletin');
@section('container')
  <body>
    <div class="container">
      <h1 class="my-3">BULETIN KES</h1>
      <div class="container">
        <div class="panel panel-primary">
          <div class="panel-heading"><h2>Upload Buletin</h2></div>
          <div class="panel-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
            </div>
            <img src="uploads/{{ Session::get('file') }}">
            @endif
            
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <input type="file" name="file" class="form-control">
              </div>
              <div class="col-md-6">
                <button type="submit" class="btn btn-success">Upload</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- <form method="POST" action="">
        @csrf
        <div class="input-group my-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" >
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
        </div>
      </form> -->
    </div>
  </body>
@endsection