@extends('layouts.master')

@section('content')
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
				<button type="button" class="btn btn-primary btn-sm float-right"  data-toggle="modal" data-target="#exampleModal">
				  Tambah Data Rekam Medis
				</button>
			</div>
			
				<table class='table table-hover'>
					<tr>
						<th>ID REKAM MEDIS</th>
						<th>ID PASIEN</th>
						<th>ID DOKTER</th>
						<th>ID PETUGAS</th>
						<th>TGL PERIKSA</th>
						<th>DIAGNOSA</th>
						<th>KETERANGAN</th>
						<TH>BIATA JASA</TH>
						<th>TOOLS</th>
					</tr>
					@foreach($data_rekammedis as $rekammedis)
					<tr>
						<td>{{$rekammedis->id_rekammedis}}</td>
						<td>{{$rekammedis->id_pasien}}</td>
						<td>{{$rekammedis->id_dokter}}</td>
						<td>{{$rekammedis->id_petugas}}</td>
						<td>{{$rekammedis->tgl_periksa}}</td>
						<td>{{$rekammedis->diagnosa}}</td>
						<td>{{$rekammedis->keterangan}}</td>
						<td>{{$rekammedis->biaya_jasa}}</td>
						<td>
							<a href="/rekammedis/{{$rekammedis->id_rekammedis}}/edit" class="btn btn-warning btn-sm">Edit</a>
							<a href="/rekammedis/{{$rekammedis->id_rekammedis}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
						</td>
					</tr>
				@endforeach
				</table>
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
		    <label for="exampleInputEmail1">ID Rekam Medis</label>
		    <input name="id_rekammedis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Rekam Medis">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">ID Pasien</label>
		    <input name="id_pasien"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Pasien">
		  </div>
		 <div class="form-group">
		    <label for="exampleInputEmail1">ID Dokter</label>
		    <input name="id_dokter"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Dokter">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">ID Petugas</label>
		    <input name="id_petugas"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Petugas">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tanggal Periksa</label>
		    <input name="tgl_periksa" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Periksa">
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
 