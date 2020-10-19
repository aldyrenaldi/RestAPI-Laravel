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
				<h2>Data Resep Obat</h2>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				<br>
				<button type="button" class="btn btn-primary btn-sm float-right"  data-toggle="modal" data-target="#exampleModal">
				  Tambah Data Resep Obat
				</button>
			</div>
			
				<table class='table table-hover'>
					<tr>
						<th>ID RESEP</th>
						<th>ID REKAM MEDIS</th>
						<th>ID OBAT</th>
						<TH>JUMLAH</TH>
						<th>TOOLS</th>
					</tr>
					@foreach($data_resepobat as $resepobat)
					<tr>
						<td>{{$resepobat->id_resep}}</td>
						<td>{{$resepobat->id_rekammedis}}</td>
						<td>{{$resepobat->id_obat}}</td>
						<td>{{$resepobat->jumlah}}</td>
						<td>
							<a href="/resepobat/{{$resepobat->id_resep}}/edit" class="btn btn-warning btn-sm">Edit</a>
							<a href="/resepobat/{{$resepobat->id_resep}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Pengisian Data Resep Obat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small -->
      <div class="modal-body">
        <form action="/resepobat/create" method="POST">
        	{{csrf_field()}}
		   <div class="form-group">
		    <label for="exampleInputEmail1">ID Resep</label>
		    <input name="id_resep" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Resep Obat">
		  </div>  
		  <div class="form-group">
		    <label for="exampleInputEmail1">ID Rekam Medis</label>
		    <input name="id_rekammedis"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Rekam Medis">
		  </div>
		 <div class="form-group">
		    <label for="exampleInputEmail1">ID Obat</label>
		    <input name="id_obat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Obat">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Jumlah</label>
		    <input name="jumlah"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jumlah">
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
 