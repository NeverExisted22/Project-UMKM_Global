<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function index(){
        $desas = Desa::all();

        return response()->json($desas);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'desa' => 'required|max:255'
        ]);

        $desa = Desa::create($request->all());
        return($desa);
    }

    public function update(Request $request, $id){

        $validated = $request->validate([
            'desa' => 'required|max:255'
        ]);

        $desa = Desa::find($id);
        $desa->update($request->all());
    }

    public function delete($id){

        $desa = Desa::find($id);
        $desa->delete();

        return("success delete");
    }


}
