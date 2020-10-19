@extends('layouts.master')

@section('content')
		<h1>Edit Data Obat</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
	  		 {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			 <div class="col-lg-12">  
			 <form action="/obat/{{$obat->id_obat}}/update" method="POST">
        	{{csrf_field()}}
		    <div class="form-group">
		    <label for="exampleInputEmail1">ID OBAT</label>
		    <input name="id_obat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Obat" value="{{$obat->id_obat}}">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">Kategori Obat</label>
		    <input name="kategori_obat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kategori Obat" value="{{$obat->kategori_obat}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Obat</label>
		    <input name="nama_obat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Obat" value="{{$obat->nama_obat}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Bentuk Obat</label>
		    <input name="bentuk_obat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Bentuk Obat" value="{{$obat->bentuk_obat}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tanggal Kadaluarsa</label>
		    <input name="tgl_kadaluarsa" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Kadaluarsa" value="{{$obat->tgl_kadaluarsa}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Harga Obat</label>
		    <input name="harga_obat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Harga Obat" value="{{$obat->harga_obat}}">
		  </div>
		          <button type="submit" class="btn btn-warning">Update</button>
        </form>
        </div>
		</div>
 @endsection

 