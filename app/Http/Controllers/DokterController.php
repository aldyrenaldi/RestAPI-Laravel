<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
     public function index()
     {
     	$data_dokter = \App\Dokter:: all();
		return view('dokter.dokter',['data_dokter' => $data_dokter]);
	}
	public function create(Request $request )
     {
     	\App\Dokter::create($request->all());
     	 return redirect('/dokter')->with('sukses', 'Data berhasil ditambahkan');
	}
	public function edit($id_dokter)
	{
		$dokter = \App\Dokter::find($id_dokter);
		return view('/dokter/edit',['dokter' => $dokter]);
	}
	public function update(Request $request, $id_dokter)
	{
		$dokter = \App\Dokter::find($id_dokter);
		$dokter->update($request->all());
		return redirect('/dokter')->with('sukses', 'Data berhasil diupdate');
	}
		public function delete($id_dokter )
	{
		$dokter = \App\Dokter::find($id_dokter);
		$dokter -> delete($dokter);
		return redirect('/dokter')->with('sukses', 'Data berhasil dihapus');;
	}
	
}

