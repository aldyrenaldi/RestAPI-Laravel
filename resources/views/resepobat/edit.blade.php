@extends('layouts.master')

@section('content')
		<h1>Edit Data Resep</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
	  		 {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			 <div class="col-lg-12">  
			 <form action="/resepobat/{{$resepobat->id_resep}}/update" method="POST">
        	{{csrf_field()}}
		   <div class="form-group">
		    <label for="exampleInputEmail1">ID Resep</label>
		    <input name="id_resep" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Resep Obat" value="{{$resepobat->id_resep}}">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">ID Rekam Medis</label>
		    <input name="id_rekammedis"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Rekam Medis" value="{{$resepobat->id_rekammedis}}">
		  </div>
		 <div class="form-group">
		    <label for="exampleInputEmail1">ID Obat</label>
		    <input name="id_obat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Obat" value="{{$resepobat->id_obat}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Jumlah</label>
		    <input name="jumlah"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jumlah" value="{{$resepobat->jumlah}}">
		  </div>
		          <button type="submit" class="btn btn-warning">Update</button>
        </form>
        </div>
		</div>
 @endsection

 