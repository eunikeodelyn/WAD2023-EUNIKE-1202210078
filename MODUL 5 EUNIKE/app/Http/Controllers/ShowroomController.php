<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function create (){
        return view('showroom.create');
    }
    public function store(Request $request){
        $data = $request->all();
        Showroom::create([
            'nama_mobil',
            'brand_mobil',
            'warna_mobil',
            'tipe_mobil',
            'harga_mobil'
        ]);
    }
    public function index (){
        return view('showroom.index');
    }
}
