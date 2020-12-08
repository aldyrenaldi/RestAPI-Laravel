@extends('layouts.body')

@section('konten')
		<h1>Edit Data Petugas</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
	  		 {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			 <div class="col-lg-12">  
			 <form action="/petugas/{{$petugas->id_petugas}}/update" method="POST">
        	{{csrf_field()}}
		   <div class="form-group">
		    <label for="exampleInputEmail1">ID Petugas</label>
		    <input name="id_petugas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Petugas" value="{{$petugas->id_petugas}}" readonly="">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Lengkap</label>
		    <input name="nama_petugas"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" value="{{$petugas->nama_petugas}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Alamat</label>
		    <textarea name="alamat_petugas"class="form-control" id="exampleFormControlTextarea1" rows="3">{{$petugas->alamat_petugas}}</textarea>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Kota</label>
		    <input name="kota_petugas"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kota" value="{{$petugas->kota_petugas}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nomor Telepon</label>
		    <input name="notelp_petugas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon" value="{{$petugas->notelp_petugas}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Status</label>
		    <input name="status_petugas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Status" value="{{$petugas->status_petugas}}">
		  </div>
		          <button type="submit" class="btn btn-warning">Update</button>
        </form>
        </div>
		</div>
 @endsection

 