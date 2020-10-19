<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function index()
     {
     	$data_rekammedis = \App\RekamMedis:: all();
		return view('rekammedis.rekammedis',['data_rekammedis' => $data_rekammedis]);
	}
	public function create(Request $request )
     {
     	\App\RekamMedis::create($request->all());
     	 return redirect('/rekammedis')->with('sukses', 'Data berhasil ditambahkan');
	}
	public function edit($id_rekammedis)
	{
		$rekammedis = \App\RekamMedis::find($id_rekammedis);
		return view('/rekammedis/edit',['rekammedis' => $rekammedis]);
	}
	public function update(Request $request, $id_rekammedis)
	{
		$rekammedis = \App\RekamMedis::find($id_rekammedis);
		$rekammedis->update($request->all());
		return redirect('/rekammedis')->with('sukses', 'Data berhasil diupdate');
	}
		public function delete($id_rekammedis )
	{
		$rekammedis = \App\RekamMedis::find($id_rekammedis);
		$rekammedis -> delete($rekammedis);
		return redirect('/rekammedis')->with('sukses', 'Data berhasil dihapus');;
	}
}
