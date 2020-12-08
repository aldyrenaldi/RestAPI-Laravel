<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\Dokter;
use App\Petugas;
use App\ResepObat;

class RekamMedisController extends Controller
{
    public function index()
     {
     	$pasien = Pasien::all();
     	$dokter = Dokter::all();
     	$petugas = Petugas::all();
     	$data_rekammedis = \App\RekamMedis:: all();
		return view('rekammedis.rekammedis', compact('pasien', 'dokter', 'petugas') , ['data_rekammedis' => $data_rekammedis]);
	}
	public function create(Request $request )
     {
     	
     	\App\RekamMedis::create($request->all());

     	 return redirect('/rekammedis' )->with('sukses', 'Data berhasil ditambahkan');
	}
	public function edit($id_rekammedis)
	{
		$pasien = Pasien::all();
     	$dokter = Dokter::all();
     	$petugas = Petugas::all();
		$rekammedis = \App\RekamMedis::find($id_rekammedis);
		return view('/rekammedis/edit', compact('pasien', 'dokter', 'petugas' ),['rekammedis'=> $rekammedis] );
	}
	public function update(Request $request, $id_rekammedis)
	{
		$rekammedis = \App\RekamMedis::find($id_rekammedis);
		$rekammedis->update($request->all());
		return redirect('/rekammedis')->with('sukses', 'Data berhasil diupdate');
	}

	public function show ($id_rekammedis){
		$rekammedis = \App\RekamMedis::find($id_rekammedis);
     	$dokter = Dokter::all();
     	$petugas = Petugas::all();
     	$resepobat = ResepObat::all();
		$pasien = Pasien::all();
		return view ('rekammedis/show', compact('pasien', 'dokter', 'petugas' ),['rekammedis'=> $rekammedis]) ;
	}


		public function delete($id_rekammedis )
	{
		$rekammedis = \App\RekamMedis::find($id_rekammedis);
		$rekammedis -> delete($rekammedis);
		return redirect('/rekammedis')->with('sukses', 'Data berhasil dihapus');;
	}
}
