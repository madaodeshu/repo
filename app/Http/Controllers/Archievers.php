<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archiever;
use Auth;
class Archievers extends Controller
{
    protected function input(Request $req)
    {
        $this->validate($req, [
        	'judul' => 'required',
        	'isi' => 'required',
        ]);

        $archiever = new Archiever;
        //$file       = $req->file('gambar');
        //$fileName   = $file->getClientOriginalName();
        //$req->file('gambar')->move("image_profile/", $fileName);
        //$users->gambar = $fileName;

        $archiever->judul = $req->input('judul');
        $archiever->isi = $req->input('isi');
        $archiever->user_id = Auth::id();
        
        $archiever->save();
        return redirect('/home')->with('response', 'Archiever Berhasil dibuat');
    }
}
