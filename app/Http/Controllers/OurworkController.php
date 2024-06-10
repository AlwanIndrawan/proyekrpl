<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourwork;
use Illuminate\Support\Str;


class OurworkController extends Controller
{
    public function index() {
        $ourwork = Ourwork::all();
        // $ourwork->deskripsi = Str::limit($ourwork->deskripsi, 15);
        return view('Home.Ourwork', ['works'=>$ourwork]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        if($request->file('gambar')){
            $validated['gambar'] = $request->file('gambar')->store('gambar-ourwork');
        }
        Ourwork::create($validated);

        return redirect('');
    }
}
