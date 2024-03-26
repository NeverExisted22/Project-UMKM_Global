<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index(){
        $kecamatan = Kecamatan::all();

        return response()->json($kecamatan);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'id_var' => 'required|max:255',
            'kecamatan' => 'required|max:255',
        ]);

        $kecamatan = Kecamatan::create($request->all());
        return($kecamatan);
    }

    public function update(Request $request, $id){

        $validated = $request->validate([
            'kecamatan' => 'required|max:255',
        ]);

        $kecamatan = Kecamatan::find($id);
        $kecamatan->update($request->all());
    }

    public function delete($id){

        $kecamatan = Kecamatan::find($id);
        $kecamatan->delete();

        return("success delete");
    }
}
