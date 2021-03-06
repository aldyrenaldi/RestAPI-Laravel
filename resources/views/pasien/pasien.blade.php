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
				<h2>Data Karyawan</h2>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				<br>
				<button type="button" class="btn btn-primary btn-sm float-right"  data-toggle="modal" data-target="#exampleModal">
				  Tambah Data Karyawan
				</button>
			</div>
			
				<table class='table table-hover' class="float-left">
					<tr>
						<th>ID PASIEN</th>
						<th>NAMA LENGKAP</th>
						<th>TGL LAHIR</th>
						<th>TEMPAT LAHIR</th>
						<th>JENIS KELAMIN</th>
						<th>ALAMAT</th>
						<th>KOTA TINGGAL</th>
						<th>NO TELEPON</th>
						<th>Departemen</th>
						<th>TOOLS</th>
					</tr>
					@foreach($data_pasien as $pasien)
					<tr>
						<td>{{$pasien->id_pasien}}</td>
						<td>{{$pasien->nama_pasien}}</td>
						<td>{{$pasien->tgl_lahir}}</td>
						<td>{{$pasien->tempat_lahir}}</td>
						<td>{{$pasien->jk_pasien}}</td>
						<td>{{$pasien->alamat_pasien}}</td>
						<td>{{$pasien->kota_pasien}}</td>
						<td>{{$pasien->notelp_pasien}}</td>
						<td>{{$pasien->pekerjaan}}</td>
						<td>
							<a href="/pasien/{{$pasien->id_pasien}}/edit" class="btn btn-warning btn-sm">Edit</a>
							<a href="/pasien/{{$pasien->id_pasien}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
						</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Pengisian Data Pasien</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 
      <div class="modal-body">
        <form action="/pasien/create" method="POST">
        	{{csrf_field()}}
		    
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama Lengkap</label>
		    <input name="nama_pasien"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Departemen</label>
		    <input name="pekerjaan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Departemen">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tanggal Lahir</label>
		    <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Lahir">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tempat Lahir</label>
		    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tempat Lahir">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Jenis Kelamin</label>
		    <input name="jk_pasien"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jenis Kelamin" >
		    <small id="emailHelp" class="form-text text-muted">*Isi dengan L/P</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Alamat</label>
		    <textarea name="alamat_pasien"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Kota</label>
		    <input name="kota_pasien"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kota">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nomor Telepon</label>
		    <input name="notelp_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon">
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
 