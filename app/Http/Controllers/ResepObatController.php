<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RekamMedis;
use App\Obat;

class ResepObatController extends Controller
{
     public function index()
     {
     	$rekammedis = RekamMedis::all();
     	$obat = Obat::all();
     	$data_resepobat = \App\ResepObat:: all();
		return view('resepobat.resepobat', compact('rekammedis', 'obat'),['data_resepobat' => $data_resepobat]);
	}
	public function create(Request $request )
     {
     	\App\ResepObat::create($request->all());
     	 return redirect('/resepobat')->with('sukses', 'Data berhasil ditambahkan');
	}
	public function edit($id_resep)
	{
		$rekammedis = RekamMedis::all();
     	$obat = Obat::all();
		$resepobat = \App\ResepObat::find($id_resep);
		return view('/resepobat/edit',compact('rekammedis', 'obat'),['resepobat' => $resepobat]);
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
