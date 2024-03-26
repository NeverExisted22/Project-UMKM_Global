<?php

namespace App\Http\Controllers;

use App\Models\Modal;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function index(){
        $modal = Modal::all();

        return response()->json($modal);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'status_modal' => 'required|max:255',
        ]);

        $modal = Modal::create($request->all());
        return($modal);
    }

    public function update(Request $request, $id){

        $validated = $request->validate([
            'status_modal' => 'required|max:255',
        ]);

        $modal = Modal::find($id);
        $modal->update($request->all());
    }

    public function delete($id){

        $modal = Modal::find($id);
        $modal->delete();

        return("success delete");
    }
}
