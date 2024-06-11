<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index() {
        $blog = Blog::all();
        // $ourwork->deskripsi = Str::limit($ourwork->deskripsi, 15);
        return view('Home.Blog', ['blogs'=>$blog]);
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
