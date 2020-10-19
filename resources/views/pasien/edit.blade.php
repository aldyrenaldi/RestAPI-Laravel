@extends('layouts.master')

@section('content')
		<h1>Edit Data Pasien</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
	  		 {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			 <div class="col-lg-12">  
			 <form action="/pasien/{{$pasien->id_pasien}}/update" method="POST">
        	{{csrf_field()}}
		   <div class="form-group">
		    <label for="exampleInputEmail1">ID Pasien</label>
		    <input name="id_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Pasien" value="{{$pasien->id_pasien}}">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Lengkap</label>
		    <input name="nama_pasien"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" value="{{$pasien->nama_pasien}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tanggal Lahir</label>
		    <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Lahir" value="{{$pasien->tgl_lahir}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tempat Lahir</label>
		    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tempat Lahir" value="{{$pasien->tempat_lahir}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Jenis Kelamin</label>
		    <small id="emailHelp" class="form-text text-muted">Isi dengan L/P</small>
		    <input name="jk_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jenis Kelamin" value="{{$pasien->jk_pasien}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Alamat</label>
		    <textarea name="alamat_pasien"class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pasien->alamat_pasien}}</textarea>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Kota</label>
		    <input name="kota_pasien"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kota" value="{{$pasien->kota_pasien}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nomor Telepon</label>
		    <input name="notelp_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon" value="{{$pasien->notelp_pasien}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Pekerjaan</label>
		    <input name="pekerjaan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Pekerjaan" value="{{$pasien->pekerjaan}}">
		  </div>
		  
		          <button type="submit" class="btn btn-warning">Update</button>
        </form>
        </div>
		</div>
 @endsection

 