<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Kategoricontroller extends Controller
{
    public function index()
    {
        
        // pakai Eloquent -->
        $kategoris = Kategori::all();

        return view('kategori', [
            'data' => $kategoris,
        ]);
    }

    public function add()
    {
        return view('form_kategori');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);

        return view ('form_kategori', [
            'data' => $kategori,
        ]);
    }

    public function save(Request $simpan){
        $old_kode = @$simpan->old_kode;

        if ($old_kode) {

            Kategori::where('kode_kategori', $old_kategori)->update([
                'kode_kategori' => $simpan->kode,
                'nama' => $simpan->nama,
                'ket' => $simpan->ket,
            ]);
    } else {
        
        Kategori::create([
            'kode_kategori'=> $simpan->kode,
            'nama' => $simpan->nama,
            'ket' => $simpan->ket,
        ]);

    }
    
    return redirect('/kategori');
    }

    public function delete($id)
    {
        Kategori ::find($id)->delete();

        return redirect ('/kategori');
    }

}

