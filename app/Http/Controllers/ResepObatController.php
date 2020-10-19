<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResepObatController extends Controller
{
     public function index()
     {
     	$data_resepobat = \App\ResepObat:: all();
		return view('resepobat.resepobat',['data_resepobat' => $data_resepobat]);
	}
	public function create(Request $request )
     {
     	\App\ResepObat::create($request->all());
     	 return redirect('/resepobat')->with('sukses', 'Data berhasil ditambahkan');
	}
	public function edit($id_resep)
	{
		$resepobat = \App\ResepObat::find($id_resep);
		return view('/resepobat/edit',['resepobat' => $resepobat]);
	}
	public function update(Request $request, $id_resep)
	{
		$resepobat = \App\ResepObat::find($id_resep);
		$resepobat->update($request->all());
		return redirect('/resepobat')->with('sukses', 'Data berhasil diupdate');
	}
		public function delete($id_resep )
	{
		$resepobat = \App\ResepObat::find($id_resep);
		$resepobat -> delete($resep);
		return redirect('/resep')->with('sukses', 'Data berhasil dihapus');;
	}
}
