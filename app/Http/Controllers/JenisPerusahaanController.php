<?php

namespace App\Http\Controllers;

use App\Models\JenisPerusahaan;
use Illuminate\Http\Request;

class JenisPerusahaanController extends Controller
{
    public function index(){
        $jenis_perusahaan = JenisPerusahaan::all();

        return response()->json($jenis_perusahaan);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'jenis_perusahaan' => 'required|max:255'
        ]);

        $jenis_perusahaan = JenisPerusahaan::create($request->all());
        return($jenis_perusahaan);
    }

    public function update(Request $request, $id){

        $validated = $request->validate([
            'jenis_perusahaan' => 'required|max:255'
        ]);

        $jenis_perusahaan = JenisPerusahaan::find($id);
        $jenis_perusahaan->update($request->all());
    }

    public function delete($id){

        $jenis_perusahaan = JenisPerusahaan::find($id);
        $jenis_perusahaan->delete();

        return("success delete");
    }
}
