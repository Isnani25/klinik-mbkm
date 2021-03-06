@extends('adminpage.layouts.main')

@section('content')
<div class="container-fluid">
    <form class="user" method="POST" enctype="multipart/form-data" action="{{ url('adminpage/dokter') }}">
        @csrf
        <div class="row">
        <div class="col-lg-6">
            <h3 class="mb-3">Tambah Data Dokter</h3>
        <div class="form-group">
            <input type="text" class="form-control"
                id="exampleInputEmail" aria-describedby="emailHelp"
                placeholder="Nama" name="name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"
                id="exampleInputPassword" placeholder="No Hp" name="HP">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="alamat" id="validationTextarea" placeholder="Alamat" required></textarea>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="">Jenis Kelamin</label><br>
                <div class="form-check d-inline">
                    <input class="form-check-input" type="radio" name="jk" value="laki-laki"
                        id="flexRadioDefault1">
                    <label class="form-check-label mr-4" for="flexRadioDefault1">
                        Laki - Laki
                    </label>
                </div>
                <div class="form-check d-inline">
                    <input class="form-check-input" type="radio" name="jk" value="perempuan"
                        id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Perempuan
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <img width="100px" height="75px" class="img-preview img-thumbnail mt-2 mb-4"/>
            <input class="form-control-file" id="image" name="image" type="file" onchange="previewImage()">
        </div>
        <div class="form-group"><button type="submit" class="btn btn-primary">Tambah</button></div>
        </div>
        </div>
    </form>
</div>
<script>
function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
        }
      }
  </script>
@endsection