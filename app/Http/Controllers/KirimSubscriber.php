<?php

namespace App\Http\Controllers;

use App\Models\UntukSubscribe;
use Illuminate\Http\Request;

class KirimSubscriber extends Controller
{
    public function index() {
        return view('CompanyProfile');

    }

    public function store(Request $tangkap) {
        UntukSubscribe::create([
            // PENJELASAN : 'email'[1]  => $request->email[2]. [1] nama harus sama 
            // dengan models (Post.php) dan kolom database, [2] nama harus sama dengan
            // form isian (PesanProduk.blade.php bagian name="email")

            'email'     => $tangkap->email
        ]);

        //redirect to index
        return redirect()->route('untuk_subscribes.index');

    }

    public function destroy($lihatemail)
    {
        

        //delete post
        
        $dar = UntukSubscribe::find($lihatemail);
        $dar->delete();


        //redirect to index
        return redirect()->route('posts.index')->with(['berhasil' => 'HAPUS DAH!']);

    }

    public function edit($lihatemail) {

        $cobalihat = UntukSubscribe::find($lihatemail)->email;
        // echo $cobalihat;

        
        return view('admin.editSubscriber', compact('cobalihat', 'lihatemail'));
    }

    public function update(Request $request, $lihatemail)
    {
        //validate form

        // $cobaupdate = UntukSubscribe::find($request->lihatemail);
        // echo $request->email;

        // echo $lihatemail;
        UntukSubscribe::find($lihatemail)->update([
            'email' => $request->email
        ]);


        //redirect to index
        return redirect()->route('posts.index')->with(['berhasil' => 'hell yeah!']);
    }

}
