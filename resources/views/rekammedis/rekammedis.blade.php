@extends('layouts.app')

@section('content')
<div class="container">
    	<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if(session('sukses'))
			<div class="alert alert-success" role="alert">
	  		 {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			<div class="col-6">
				<br>
				<br>
				<h2>Data Rekam Medis</h2>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				<br>
				  @can('manage-users')
				<button type="button" class="btn btn-primary btn-sm float-right"  data-toggle="modal" data-target="#exampleModal">
				  Tambah Data Rekam Medis
				</button>
				@endcan
			</div>			
				<table class='table table-hover'>
					<tr>
						<th>ID REKAM MEDIS</th>
						<th>NAMA KARYAWAN</th>
						<th>NAMA DEPARTEMEN</th>
						<th>NAMA MITRA</th>
						<th>TGL PERIKSA</th>
						<th>DIAGNOSA</th>
						<th>KETERANGAN</th>
						<TH>BIAYA JASA</TH>
						<th>TOOLS</th>
					</tr>
					@foreach($data_rekammedis as $rekammedis)
					<tr>
						<td>{{$rekammedis->id_rekammedis}}</td>
						<td>{{$rekammedis->pasien->nama_pasien}}</td>
						<td>{{$rekammedis->dokter['nama_dokter']}}</td>
						<td>{{$rekammedis->petugas->nama_petugas}}</td>
						<td>{{$rekammedis->tgl_periksa}}</td>
						<td>{{$rekammedis->diagnosa}}</td>
						<td>{{$rekammedis->keterangan}}</td>
						<td>{{$rekammedis->biaya_jasa}}</td>
						<td>
							@can('manage-users')
							<a href="/rekammedis/{{$rekammedis->id_rekammedis}}/edit" class="btn btn-warning btn-sm">Edit</a>
							<a href="/rekammedis/{{$rekammedis->id_rekammedis}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
							@endcan
							<a href="/rekammedis/downloadPDF/{{$rekammedis->id_rekammedis}}" class="btn btn-success btn-sm">Cetak</a>
					</tr>
				@endforeach
				</table>
		</div>
	</div>
	</div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Pengisian Data Rekam Medis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small -->
      <div class="modal-body">
        <form action="/rekammedis/create" method="POST">
        	{{csrf_field()}}
		    
		  <div class="form-group">
		    <label for="exampleInputEmail1">ID Karyawan</label>
		    <select class="form-control" name="id_pasien">
		    	<option value="">Pilih Pasien</option>
		    	@foreach($pasien as $p )
		    	<option value="{{$p->id_pasien}}"> {{$p->nama_pasien}}</option>
		    	@endforeach
		    </select>
		  </div>
		 <div class="form-group">
		    <label for="exampleInputEmail1">ID Departemen</label>
		    <select class="form-control" name="id_dokter">
		    	<option value="">Pilih Departemen</option>
		    	@foreach($dokter as $d )
		    	<option value="{{$d->id_dokter}}"> {{$d->nama_dokter}}</option>
		    	@endforeach
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">ID Mitra</label>
		    <select class="form-control" name="id_petugas">
		    	<option value="">Pilih Mitra</option>
		    	@foreach($petugas as $pe )
		    	<option value="{{$pe->id_petugas}}"> {{$pe->nama_petugas}}</option>
		    	@endforeach
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tanggal Periksa</label>
		    <input name="tgl_periksa" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Periksa" value="<?php echo date('Y-m-d'); ?>">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Diagnosa</label>
		    <input name="diagnosa"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Diagnosa">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Keterangan</label>
		    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Keterangan">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Biaya Jasa</label>
		    <input name="biaya_jasa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Biaya Jasa">
		  </div>
		
      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	        

	        </form>
      	
    		</div>
	        </div>
  </div>
		
 @endsection
 