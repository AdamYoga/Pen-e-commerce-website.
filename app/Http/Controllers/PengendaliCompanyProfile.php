<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PengendaliCompanyProfile extends Controller
{
    


    public function Produk() {
        return view('Produk');
    }

    public function HalamanUtama() {
        return view('CompanyProfile');
    }

    public function Pesan(Request $request) {
        $kodegambar = $request -> input('KodeGambar');
        $kodeslogan = $request -> input('KodeSlogan');

        return view('PesanProduk', ['kodegambar' => $kodegambar, 'kodeslogan' => $kodeslogan]);
    }

    public function index() {

    }

    public function store(Request $request) {
        Post::create([
            // PENJELASAN : 'email'[1]  => $request->email[2]. [1] nama harus sama 
            // dengan models (Post.php) dan kolom database, [2] nama harus sama dengan
            // form isian (PesanProduk.blade.php bagian name="email")

            'email'     => $request->email,
            'kuantitas'   => $request->kuantitas,
            'no_telepon'   => $request->no_telepon
        ]);

        //redirect to index
        return view('CompanyProfile');

    }

    

}
