<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $data = Berita::join('users', 'beritas.user_id', '=', 'users.id')
        ->join('categories', 'beritas.category_id', '=', 'categories.id')
        ->select(['users.nama', 'beritas.*','categories.nama_category'])
        ->latest()
        ->paginate(5);
        return view('/layouts_admin/index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('/layouts_admin/form');
    }    
    //  /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */    
}
