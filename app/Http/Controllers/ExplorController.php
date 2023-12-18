<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Explor; // Sesuaikan dengan namespace dan nama model Anda

class ExplorController extends Controller
{
    public function showExplorations()
    {
        $explorations = Explor::all();
        return view('explor', ['explorations' => $explorations]);
    }
    public function edit($id)
    {
        // Logika untuk menampilkan formulir pengeditan
        $exploration = Explor::find($id);

        return view('edit_exploration', ['exploration' => $exploration]);
    }
    public function destroy($id)
    {
        // Logika untuk menghapus eksplorasi
        $exploration = Explor::find($id);
        $exploration->delete();

        return redirect()->route('explor')->with('success', 'Exploration deleted successfully');
    }
}