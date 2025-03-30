<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = Auth::user();
        $data = User::where('id', '!=', $auth->id)->get();
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
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make('password'),
        ]);
        return response()->json([
            'status'  => 'success',
            'message' => 'Data Berhasil Ditambahkan',
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::where('id', $id)->first();
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
        $data = User::where('id', $id)->first();
        return response()->json([
            'status'  => 'success',
            'message' => 'Data retrieved successfully',
            'data'    => $data,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return response()->json([
            'status'  => 'success',
            'message' => 'Data Berhasil Diubah',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return response()->json([
            'status'  => 'success',
            'message' => 'Data Berhasil Dihapus',
        ], 200);
    }
}
