<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mahasiswa::all();
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
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswa,nim',
            'prodi' => 'required|string|max:255',
        ]);

        $data = Mahasiswa::create([
            'name'  => $request->name,
            'nim'   => $request->nim,
            'prodi' => $request->prodi,
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Data created successfully',
            'data'    => $data,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Mahasiswa::find($id);
        if (!$data) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data not found',
            ], 404);
        }

        return response()->json([
            'status'  => 'success',
            'message' => 'Data retrieved successfully',
            'data'    => $data,
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
        $data = Mahasiswa::find($id);
        if (!$data) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data not found',
            ], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswa,nim,'.$id,
            'prodi' => 'required|string|max:255',
        ]);

        $data->update([
            'name'  => $request->name,
            'nim'   => $request->nim,
            'prodi' => $request->prodi,
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Data updated successfully',
            'data'    => $data,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Mahasiswa::find($id);
        if (!$data) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data not found',
            ], 404);
        }

        $data->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data deleted successfully',
        ], 200);
    }
}
