<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
     public function index()
     {
     	$data_pasien = \App\Pasien:: all();
		return view('pasien.pasien',['data_pasien' => $data_pasien]);
	}
	public function create(Request $request )
     {
     	\App\Pasien::create($request->all());
     	 return redirect('/pasien')->with('sukses', 'Data berhasil ditambahkan');
	}
	public function edit($id_pasien)
	{
		$pasien = \App\Pasien::find($id_pasien);
		return view('/pasien/edit',['pasien' => $pasien]);
	}
	public function update(Request $request, $id_pasien)
	{
		$pasien = \App\Pasien::find($id_pasien);
		$pasien->update($request->all());
		return redirect('/pasien')->with('sukses', 'Data berhasil diupdate');
	}
		public function delete($id_pasien )
	{
		$pasien = \App\Pasien::find($id_pasien);
		$pasien -> delete($pasien);
		return redirect('/pasien')->with('sukses', 'Data berhasil dihapus');;
	}
}
