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
				<h2>Data Obat</h2>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				<br>
				<button type="button" class="btn btn-primary btn-sm float-right"  data-toggle="modal" data-target="#exampleModal">
				  Tambah Data Obat
				</button>
			</div>
			
				<table class='table table-hover'>
					<tr>
						<th>ID OBAT</th>
						<th>KATEGORI OBAT</th>
						<th>NAMA OBAT</th>
						<th>BENTUK OBAT</th>
						<th>TANGGAL KADALUARSA</th>
						<th>HARGA OBAT</th>
						<th>TOOLS</th>
					</tr>
					@foreach($data_obat as $obat)
					<tr>
						<td>{{$obat->id_obat}}</td>
						<td>{{$obat->kategori_obat}}</td>
						<td>{{$obat->nama_obat}}</td>
						<td>{{$obat->bentuk_obat}}</td>
						<td>{{$obat->tgl_kadaluarsa}}</td>
						<td>{{$obat->harga_obat}}</td>
						<td>
							<a href="/obat/{{$obat->id_obat}}/edit" class="btn btn-warning btn-sm">Edit</a>
							<a href="/obat/{{$obat->id_obat}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Pengisian Data Obat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small -->
      <div class="modal-body">
        <form action="/obat/create" method="POST">
        	{{csrf_field()}}
		   <div class="form-group">
		    <label for="exampleInputEmail1">ID OBAT</label>
		    <input name="id_obat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Obat">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">Kategori Obat</label>
		    <input name="kategori_obat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kategori Obat">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Obat</label>
		    <input name="nama_obat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Obat">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Bentuk Obat</label>
		    <input name="bentuk_obat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Bentuk Obat">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tanggal Kadaluarsa</label>
		    <input name="tgl_kadaluarsa" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Kadaluarsa">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Harga Obat</label>
		    <input name="harga_obat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Harga Obat">
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
 