<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pegawai::get();
        return response()->json([
            'status'  => 'success',
            'message' => 'Data retrieved successfully',
            'data'    => $data,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = Pegawai::create([
            'name'     => $request->name,
            'nip'    => $request->nip,
            'jabatan'    => $request->jabatan,
        ]);
        // return $data;
        return response()->json([
            'status'  => 'success',
            'message' => 'Data berhasil ditambahkan',
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pegawai::where('id', $id)->first();
        return response()->json([
            'status'  => 'success',
            'message' => 'Data berhasil ditemukan',
            'data' => $data,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Pegawai::where('id', $id)->update([
            'name' => $request->name,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Data berhasil diubah',
            'data' => $data,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pegawai::where('id', $id)->delete();
        return response()->json([
            'status'  => 'success',
            'message' => 'Data berhasil dihapus',
        ], 200);
    }
}
