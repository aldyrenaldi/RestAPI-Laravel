@extends('layouts.master')

@section('content')
		<h1>Edit Data Rekam Medis</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
	  		 {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			 <div class="col-lg-12">  
			 <form action="/rekammedis/{{$rekammedis->id_rekammedis}}/update" method="POST">
        	{{csrf_field()}}
		   <div class="form-group">
		    <label for="exampleInputEmail1">ID Rekam Medis</label>
		    <input name="id_rekammedis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Rekam Medis" value="{{$rekammedis->id_rekammedis}}">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">ID Pasien</label>
		    <input name="id_pasien"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Pasien" value="{{$rekammedis->id_pasien}}" >
		  </div>
		 <div class="form-group">
		    <label for="exampleInputEmail1">ID Dokter</label>
		    <input name="id_dokter"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Dokter" value="{{$rekammedis->id_dokter}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">ID Petugas</label>
		    <input name="id_petugas"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Petugas" value="{{$rekammedis->id_petugas}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tanggal Periksa</label>
		    <input name="tgl_periksa" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Periksa" value="{{$rekammedis->tgl_periksa}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Diagnosa</label>
		    <input name="diagnosa"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Diagnosa" value="{{$rekammedis->diagnosa}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Keterangan</label>
		    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Keterangan" value="{{$rekammedis->keterangan}}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Biaya Jasa</label>
		    <input name="biaya_jasa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Biaya Jasa" value="{{$rekammedis->biaya_jasa}}">
		  </div>
		          <button type="submit" class="btn btn-warning">Update</button>
        </form>
        </div>
		</div>
 @endsection

 