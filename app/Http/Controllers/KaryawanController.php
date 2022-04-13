<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;


class KaryawanController extends Controller
{
    public function getKaryawan()
    {
        return response()->json(Karyawan::all(), 200);
    }

    public function getKaryawanById($id)
    {
        $karyawan = Karyawan::find($id);
        if (is_null($karyawan)) {
            return response()->json(['message' => 'Karyawan tidak ditemukan'], 404);
        }
        return response()->json($karyawan::find($id), 200);
    }

    public function tambahKaryawan(Request $request)
    {
        $karyawan = Karyawan::create($request->all());
        return response($karyawan, 201);
    }

    public function updateKaryawan(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);
        if (is_null($karyawan)) {
            return response()->json(['message' => 'Karyawan tidak ditemukan'], 404);
        }
        $karyawan->update($request->all());
        return response($karyawan, 200);
    }

    public function hapusKaryawan(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);
        if (is_null($karyawan)) {
            return response()->json(['message' => 'Karyawan tidak ditemukan'], 404);
        }
        $karyawan->delete();
        return response()->json(null, 204);
    }
}
