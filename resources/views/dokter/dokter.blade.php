@extends('layouts.master')

@section('content')
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
	  		 {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h2>Data Dokter</h2>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary btn-sm float-right"  data-toggle="modal" data-target="#exampleModal">
				  Tambah Data Dokter
				</button>
			</div>
			
				<table class='table table-hover'>
					<tr>
						<th>ID DOKTER</th>
						<th>NAMA LENGKAP</th>
						<th>ALAMAT</th>
						<th>KOTA TINGGAL</th>
						<th>NO TELEPON</th>
						<th>SPESIALIS</th>
						<th>TOOLS</th>
					</tr>
					@foreach($data_dokter as $dokter)
					<tr>
						<td>{{$dokter->id_dokter}}</td>
						<td>{{$dokter->nama_dokter}}</td>
						<td>{{$dokter->alamat}}</td>
						<td>{{$dokter->kota_tinggal}}</td>
						<td>{{$dokter->no_telp}}</td>
						<td>{{$dokter->spesialis}}</td>
						<td>
							<a href="/dokter/{{$dokter->id_dokter}}/edit" class="btn btn-warning btn-sm">Edit</a>
							<a href="/dokter/{{$dokter->id_dokter}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Pengisian Data Dokter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small -->
      <div class="modal-body">
        <form action="/dokter/create" method="POST">
        	{{csrf_field()}}
		   <div class="form-group">
		    <label for="exampleInputEmail1">ID Dokter</label>
		    <input name="id_dokter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Dokter">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Lengkap</label>
		    <input name="nama_dokter"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Alamat</label>
		    <textarea name="alamat"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Kota</label>
		    <input name="kota_tinggal"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kota">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nomor Telepon</label>
		    <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Spesialis</label>
		    <input name="spesialis"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Spesialis">
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
 