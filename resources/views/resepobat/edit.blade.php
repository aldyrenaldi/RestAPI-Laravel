@extends('layouts.body')

@section('konten')
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
		    <input name="id_resep" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Resep Obat" value="{{$resepobat->id_resep}}" readonly="">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">ID Rekam Medis</label>
		    <select class="form-control" name="id_rekammedis">
		    	<option value="">Pilih Rekam Medis</option>
		    	@foreach($rekammedis as $rm )
		    	<option value="{{$rm->id_rekammedis}}" selected> {{$rm->id_rekammedis}}</option>
		    	@endforeach
		    </select>
		  </div>
		 <div class="form-group">
		    <label for="exampleInputEmail1">ID Obat</label>
		    <select class="form-control" name="id_obat">
		    	<option value="">Pilih Obat</option>
		    	@foreach($obat as $o )
		    	<option value="{{$o->id_obat}}" selected> {{$o->nama_obat}}</option>
		    	@endforeach
		    </select>
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

 