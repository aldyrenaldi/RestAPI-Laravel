@extends('layouts.master')

@section('content')
		<h1>Edit Data Dokter</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
	  		 {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			 <div class="col-lg-12">  
			 <form action="/dokter/{{$dokter->id_dokter}}/update" method="POST">
        	{{csrf_field()}}
		   <div class="form-group">
		    <label for="exampleInputEmail1">ID Dokter</label>
		    <input name="id_dokter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Dokter" value="{{$dokter->id_dokter}}">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Lengkap</label>
		    <input name="nama_dokter"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" value="{{$dokter->nama_dokter}}">
		  </div>
		  <div class="form-group">
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
		          <button type="submit" class="btn btn-warning">Update</button>
        </form>
        </div>
		</div>
 @endsection

 