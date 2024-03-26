<?php

namespace App\Http\Controllers;

use App\Models\KBLI;
use Illuminate\Http\Request;

class KBLIController extends Controller
{
    public function index(){
        $kbli = KBLI::all();

        return response()->json($kbli);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'id' => 'required|max:255',
            'judul' => 'required|max:255',
            'pembina' => 'required|max:255'
        ]);

        $kbli = KBLI::create($request->all());
        return($kbli);
    }

    public function update(Request $request, $id){

        $validated = $request->validate([
            'judul' => 'required|max:255',
            'pembina' => 'required|max:255'
        ]);

        $kbli = KBLI::find($id);
        $kbli->update($request->all());
    }

    public function delete($id){

        $kbli = KBLI::find($id);
        $kbli->delete();

        return("success delete");
    }
}
