<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function home()
    {
        $data = Berita::join('users', 'beritas.user_id', '=', 'users.id')
        ->join('categories', 'beritas.category_id', '=', 'categories.id')
        ->select(['users.nama', 'beritas.*','categories.nama_category'])
        ->latest()
        ->paginate(3);
        return view('/layouts/home', compact('data'))->with('i', (request()->input('page', 1) - 1) * 3);
    }
    public function profile()
    {
        return view('/layouts/profile');
    }
    public function calculator()
    {
        return view('/layouts/calculator');
    }
    public function table()
    {
        return view('/layouts/table');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/assets/images', $image->hashName());
        
        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $image->storeAs('public/assets/images', $image->hashName()),
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
        ]);

        // Berita::create($request->all());    
        return redirect()->route('create.index')->with('success', 'post created');
    }
}
