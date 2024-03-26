<?php

namespace App\Http\Controllers;

use App\Models\Resiko;
use Illuminate\Http\Request;

class ResikoController extends Controller
{
    public function index(){
        $Resiko = Resiko::all();

        return response()->json($Resiko);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'resiko_proyek' => 'required|max:255',
        ]);

        $Resiko = Resiko::create($request->all());
        return($Resiko);
    }

    public function update(Request $request, $id){

        $validated = $request->validate([
            'resiko_proyek' => 'required|max:255',
        ]);

        $Resiko = Resiko::find($id);
        $Resiko->update($request->all());
    }

    public function delete($id){

        $Resiko = Resiko::find($id);
        $Resiko->delete();

        return("success delete");
    }
}
