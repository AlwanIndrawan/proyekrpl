<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {
        $blog = Blog::all();
        // $ourwork->deskripsi = Str::limit($ourwork->deskripsi, 15);
        return view('Admin.show_post', ['blogs'=>$blog]);
    }

    public function tampilkan(){
        return view('Admin.post_page');
    }

    public function store(Request $request) {
        // $validated = $request->validate([
        //     'judul' => 'required',
        //     'deskripsi' => 'required',
        //     'gambar' => 'required',
        // ]);

        // if($request->file('gambar')){
        //     $validated['gambar'] = $request->file('gambar')->store('gambar-blog');
        // }
        // Blog::create($validated);

        $blog = new Blog;

        $blog->judul=$request->judul;
        $blog->deskripsi=$request->deskripsi;
        $gambar=$request->gambar;
        if($gambar) {
            $gambarname=time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('blog',$gambarname);
            $blog->gambar = $gambarname;
        }

        $blog->save();

        return redirect('/admin-blog');
    }

    public function edit($id) {
        $blog = Blog::findOrFail($id);
        return view('Admin.edit_page', ['blog' => $blog]);
    }

    public function update(Request $request, $id) {
        $blog = Blog::find($id);

        $blog->judul=$request->judul;

        $blog->deskripsi=$request->deskripsi;

        $gambar=$request->gambar;

        if($gambar)
        {
            $imagename=time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('blog',$imagename);
            $blog->gambar = $imagename;
        }

        $blog->save();

        return redirect('/admin-blog');
    }

    public function destroy($id) {
        $blog = Blog::find($id);

        $blog->delete();
        return redirect()->back();
    }
}
