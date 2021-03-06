<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allDokter = Dokter::all();

        return response()->json([
            'status' => 'success',
            'data' => $allDokter
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newDokter = Dokter::create($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $newDokter
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($dokter)
    {
        $dokter = Dokter::findOrFail($dokter);

        return response()->json([
            'status' => 'success',
            'data' => $dokter
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dokter)
    {
        $dokter = Dokter::findOrFail($dokter);
        $dokter->update($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $dokter
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($dokter)
    {
        $dokter = Dokter::findOrFail($dokter);
        $dokter->delete();

        return response()->json([
            'status' => 'success',
            'data' => $dokter
        ], 200);
    }
}
