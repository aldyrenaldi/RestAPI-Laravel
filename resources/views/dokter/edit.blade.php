@extends('layouts.body')

@section('konten')
		<h2>Edit Data Dokter</h2>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
	  		 {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			 <div class="col-lg-6">  
			 <form action="/dokter/{{$dokter->id_dokter}}/update" method="POST">
        	{{csrf_field()}}
		   <div class="form-group">
		    <label for="exampleInputEmail1">ID Departemen</label>
		    <input name="id_dokter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Departemen" value="{{$dokter->id_dokter}}" readonly="">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Departemen</label>
		    <input name="nama_dokter"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Departemen" value="{{$dokter->nama_dokter}}">
		  </div>
<!-- 		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Alamat</label>
		    <textarea name="alamat"class="form-control" id="exampleFormControlTextarea1" rows="3">{{$dokter->alamat}}</textarea>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Kota</label>
		    <input name="kota_tinggal"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kota" value="{{$dokter->kota_tinggal}}" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nomor Telepon</label>
		    <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon" value="{{$dokter->no_telp}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Spesialis</label>
		    <input name="spesialis"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Spesialis" value="{{$dokter->spesialis}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Status</label>
		    <input name="status_dokter"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Status" value="{{$dokter->status_dokter}}"> -->
		  <!-- </div> -->
		          <button type="submit" class="btn btn-warning">Update</button>
        </form>
        </div>
		</div>
 @endsection

 