<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
     public function index()
     {
     	$data_petugas = \App\Petugas:: all();
		return view('petugas.petugas',['data_petugas' => $data_petugas]);
	}
	public function create(Request $request )
     {
     	\App\Petugas::create($request->all());
     	 return redirect('/petugas')->with('sukses', 'Data berhasil ditambahkan');
	}
	public function edit($id_petugas)
	{
		$petugas = \App\Petugas::find($id_petugas);
		return view('/petugas/edit',['petugas' => $petugas]);
	}
	public function update(Request $request, $id_petugas)
	{
		$petugas = \App\Petugas::find($id_petugas);
		$petugas->update($request->all());
		return redirect('/petugas')->with('sukses', 'Data berhasil diupdate');
	}
		public function delete($id_petugas )
	{
		$petugas = \App\Petugas::find($id_petugas);
		$petugas -> delete($petugas);
		return redirect('/petugas')->with('sukses', 'Data berhasil dihapus');;
	}
}
