@extends('layouts.body')

@section('konten')
				<h1>Edit Data Rekam Medis</h1>
				@if(session('sukses'))
					
					<div class="alert alert-success" role="alert">
			  		 {{session('sukses')}}
					</div>
					@endif
				<div class="row">
					 <div class="col-lg-12">  
					 <form action="/rekammedis/{{$rekammedis->id_rekammedis}}/update" method="post">
		        	{{csrf_field()}}
				   <div class="form-group">
				    <label for="exampleInputEmail1">ID Rekam Medis</label>
				    <input name="id_rekammedis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Rekam Medis" value="{{$rekammedis->id_rekammedis}}" readonly="">
				  </div>  
				<div class="form-group">
				    <label for="exampleInputEmail1">ID Karyawan</label>
				    <select class="form-control" name="id_pasien">
				    	<option value="">Pilih Pasien</option>
				    	@foreach($pasien as $p )
				    	<option value="{{$p->id_pasien}}" selected> {{$p->nama_pasien}}</option>
				    	@endforeach
				    </select>
				  </div>
				 <div class="form-group">
				    <label for="exampleInputEmail1">ID Departemen</label>
				    <select class="form-control" name="id_dokter">
				    	<option value="">Pilih Dokter</option>
				    	@foreach($dokter as $d )
				    	<option value="{{$d->id_dokter}}" selected > {{$d->nama_dokter}}</option>
				    	@endforeach
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">ID Mitra</label>
				    <select class="form-control" name="id_petugas">
				    	<option value="">Pilih Petugas</option>
				    	@foreach($petugas as $pe )
				    	<option value="{{$pe->id_petugas}}" selected> {{$pe->nama_petugas}}</option>
				    	@endforeach
				    </select>
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

 