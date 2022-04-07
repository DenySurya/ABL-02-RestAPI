<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //GET DATA
    public function getDataMasyarakat()
    {
        $masyarakats = Masyarakat::all();
        return response()->json(['Message' => 'Data Masyarakat','data' => $masyarakats]);
    }
    //GET DATA BY ID
    public function getDataMasyarakatId($id)
    {
        $masyarakats = Masyarakat::findOrFail($id);
        return response()->json(['Message' => 'Masyarakat Desa', 'data' => $masyarakats]);
    }

    // POST
    public function postDataMasyarakat(Request $request)
    {
        try{
        $masyarakats = Masyarakat::create([ 'nama' => $request->nama,
        'nama_panggilan' => $request->nama_panggilan,
        'nik' => $request->nik,
        'no_hp' => $request->no_hp,
        'alamat' => $request->alamat,
        'detail_alamat' => $request->detail_alamat,

        ]);
        return  response()->json(['Message' => 'Berhasil disimpan', 'data' => $masyarakats]);

        }catch (\Throwable $th) {return  response()->json(['Message' => 'Gagal disimpan', 'errors' => $th->getMessage()]);
        }
        
    }

    
    //UPDATE
    public function updateDataMasyarakat(Request $request, $id)
    {
        try{
        $masyarakats = Masyarakat::findOrFail($id);
        $masyarakats->update($request->all());
        return response()->json(['Message' => 'Berhasil diupdate', 'data' => $masyarakats]);
        }catch (\Throwable $th) {return  response()->json(['Message' => 'Gagal diupdate', 'errors' => $th->getMessage()]);
        }
    }

    //DELETE
    public function hapusDataMasyarakat($id)
    {
        try{
        $masyarakats = Masyarakat::findOrFail($id);
        $masyarakats->delete();

        return response()->json(['Message' => 'Berhasil didelete', 'data' => null]);
        } catch (\Throwable $th) {return  response()->json(['Message' => 'Gagal didelete', 'errors' => $th->getMessage()]);
        }
    
    }

    //SEARCH
    public function searchDataMasyarakat($nama)
    {
        $hasil = Masyarakat::where('nama', 'LIKE', '%' . $nama . '%')->get();

        if (count($hasil)) {
            return response()->json($hasil);
        } else {
            return response()->json("Masyarakat tidak ditemukan");
        }
    }
}