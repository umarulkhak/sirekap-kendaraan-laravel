@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Kendaraan') }}</div><br>
<div class="container">
    <form action="/ubah-kendaraan" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nim">NO PLAT : </label>
            <input class="form-control" type="text" name="plat" id="plat" value="{{$data->plat}}" required>
        </div>
        <div class="form-group">
            <label for="nama">MERK : </label>
            <input class="form-control" type="text" name="merk" id="merk" value="{{$data->merk}}" required>
        </div>
        <div class="form-group">
            <label for="harga">TIPE : </label>
            <input class="form-control" type="text" name="tipe" id="tipe" value="{{$data->tipe}}" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Upload file</label>
            <input type="file" class="form-control-file" id="file" name="file"  onchange="previewFile(this)">
            <img id="previewImg" alt="Image View" src="{{ asset('images') }}/{{ $data->profileimage }}" style="max-width:90px;margin-top:20px;">
          </div>
        <input type="hidden" value="{{$data->id}}" id="id" name="id">
        <input class="btn btn-outline-success" type="submit" value="Save"><br>

        <script>
            function previewFile(input){
              var file=$("input[type=file]").get(0).files[0]
              if(file){
                  var reader = new FileReader();
                  reader.onload = function(){
                      $('#previewImg').attr("src",reader.result);
                  }
                  reader.readAsDataURL(file);
              }
            }
        </script>
    </form>
</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
