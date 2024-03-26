<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{

    public function index(){
        $Perusahaan = Perusahaan::all();

        return response()->json($Perusahaan);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'NIB' => 'required|max:255',
            'NPWP' => 'required|max:255',
            'Nama' => 'required|max:255',
            'jenis_perusahaan_id' => 'required|max:255',
        ]);

        $Perusahaan = Perusahaan::create($request->all());
        return($Perusahaan);
    }

    public function update(Request $request, $id){

        $validated = $request->validate([
            'NIB' => 'required|max:255',
            'NPWP' => 'required|max:255',
            'Nama' => 'required|max:255',
            'jenis_perusahaan_id' => 'required|max:255',
        ]);

        $Perusahaan = Perusahaan::find($id);
        $Perusahaan->update($request->all());
    }

    public function delete($id){

        $Perusahaan = Perusahaan::find($id);
        $Perusahaan->delete();

        return("success delete");
    }
}
