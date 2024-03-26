<?php

namespace App\Http\Controllers;

use App\Models\SkalaUsaha;
use Illuminate\Http\Request;

class SkalaUsahaController extends Controller
{
    public function index(){
        $SkalaUsaha = SkalaUsaha::all();
        return response()->json($SkalaUsaha);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'skala_usaha' => 'required|max:255',
        ]);

        $SkalaUsaha = SkalaUsaha::create($request->all());
        return($SkalaUsaha);
    }

    public function update(Request $request, $id){

        $validated = $request->validate([
            'skala_usaha' => 'required|max:255',
        ]);

        $SkalaUsaha = SkalaUsaha::find($id);
        $SkalaUsaha->update($request->all());
    }

    public function delete($id){

        $SkalaUsaha = SkalaUsaha::find($id);
        $SkalaUsaha->delete();

        return("success delete");
    }
}
