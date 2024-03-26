<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function index(){
        $Proyek = Proyek::all();

        return response()->json($Proyek);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'longitude' => 'required|max:255',
            'latitude' => 'required|max:255',
            'alamat' => 'required|max:255',
            'perusahaan_id' => 'required|max:255',
            'modal_id' => 'required|max:255',
            'resiko_id' => 'required|max:255',
            'skala_usaha_id' => 'required|max:255',
            'kecamatan_id' => 'required|max:255',
            'desa_id' => 'required|max:255',
            'kbli' => 'required|max:255',
        ]);

        $Proyek = Proyek::create($request->all());
        return($Proyek);
    }

    public function update(Request $request, $id){

        $validated = $request->validate([
            'longitude' => 'required|max:255',
            'latitude' => 'required|max:255',
            'alamat' => 'required|max:255',
            'perusahaan_id' => 'required|max:255',
            'modal_id' => 'required|max:255',
            'resiko_id' => 'required|max:255',
            'skala_usaha_id' => 'required|max:255',
            'kecamatan_id' => 'required|max:255',
            'desa_id' => 'required|max:255',
            'kbli' => 'required|max:255',
        ]);

        $Proyek = Proyek::find($id);
        $Proyek->update($request->all());
    }

    public function delete($id){

        $Proyek = Proyek::find($id);
        $Proyek->delete();

        return("success delete");
    }
}
