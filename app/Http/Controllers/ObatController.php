<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObatController extends Controller
{
     public function index()
     {
     	$data_obat = \App\Obat:: all();
		return view('obat.obat',['data_obat' => $data_obat]);
	}
	public function create(Request $request )
     {
     	\App\Obat::create($request->all());
     	 return redirect('/obat')->with('sukses', 'Data berhasil ditambahkan');
	}
	public function edit($id_obat)
	{
		$obat = \App\Obat::find($id_obat);
		return view('/obat/edit',['obat' => $obat]);
	}
	public function update(Request $request, $id_obat)
	{
		$obat = \App\Obat::find($id_obat);
		$obat->update($request->all());
		return redirect('/obat')->with('sukses', 'Data berhasil diupdate');
	}
		public function delete($id_obat)
	{
		$obat = \App\Obat::find($id_obat);
		$obat -> delete($obat);
		return redirect('/obat')->with('sukses', 'Data berhasil dihapus');;
	}
}
