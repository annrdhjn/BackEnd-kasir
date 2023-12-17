<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use App\Http\Requests\PemesananRequest;
use Exception;
use PDOException;


class PemesananController extends Controller
{
    public function index()
    {
        try {
            $data = Pemesanan::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    public function store(Request $request)
    {
        try {
            $data = Pemesanan::create($request->all());
            return response()->json(['status' => true, 'message' => ' input data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    public function update(PemesananRequest $request, Pemesanan $pemesanan)
    {
        try {
            $validated  = $request->validated();
            $data = $pemesanan->update($validated);
            return response()->json(['status' => true, 'message' => ' update data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal update data', 'error_type' => $e]);
        }
    }

    public function destroy(Pemesanan $pemesanan)
    {
        try {
            $data = $pemesanan->delete();
            return response()->json(['status' => true, 'message' => ' delete data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menghapus data']);
        }
    }
}