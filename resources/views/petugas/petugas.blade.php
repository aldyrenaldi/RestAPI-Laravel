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
				<h2>Data Petugas</h2>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				<br>
				<button type="button" class="btn btn-primary btn-sm float-right"  data-toggle="modal" data-target="#exampleModal">
				  Tambah Data Petugas
				</button>
			</div>
			
				<table class='table table-hover'>
					<tr>
						<th>ID PETUGAS</th>
						<th>NAMA LENGKAP</th>
						<th>ALAMAT</th>
						<th>KOTA TINGGAL</th>
						<th>NO TELEPON</th>
						<th>STATUS</th>
						<th>TOOLS</th>
					</tr>
					@foreach($data_petugas as $petugas)
					<tr>
						<td>{{$petugas->id_petugas}}</td>
						<td>{{$petugas->nama_petugas}}</td>
						<td>{{$petugas->alamat_petugas}}</td>
						<td>{{$petugas->kota_petugas}}</td>
						<td>{{$petugas->notelp_petugas}}</td>
						<td>{{$petugas->status_petugas}}</td>
						<td>
							<a href="/petugas/{{$petugas->id_petugas}}/edit" class="btn btn-warning btn-sm">Edit</a>
							<a href="/petugas/{{$petugas->id_petugas}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Pengisian Data Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small -->
      <div class="modal-body">
        <form action="/petugas/create" method="POST">
        	{{csrf_field()}}
		   <div class="form-group">
		    <label for="exampleInputEmail1">ID Petugas</label>
		    <input name="id_petugas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Petugas">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Lengkap</label>
		    <input name="nama_petugas"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Alamat</label>
		    <textarea name="alamat_petugas"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Kota</label>
		    <input name="kota_petugas"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kota">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nomor Telepon</label>
		    <input name="notelp_petugas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Status</label>
		    <input name="status_petugas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Status">
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
 