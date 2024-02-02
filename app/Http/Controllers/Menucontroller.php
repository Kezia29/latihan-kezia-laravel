<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Makanan;
use App\Models\Kategori;

class Menucontroller extends Controller
{
    public function index()
    {
        $makanans = Makanan::all();

        return view('menu', [
            'data' => $makanans,
        ]);   
    }

    public function add()
    {
        $kategoris = Kategori::all();

        return view('form_makanan', [
            'kategoris' => $kategoris,
        ]);

        
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);

        return view ('form_kategori', [
            'data' => $kategori,
        ]);
    }

    public function save(Request $nyimpen){
        $old_kode = @$nyimpen->old_kode;

            if ($old_kode) {

                Makanan::where('kode_makanan', $old_kategori)->update([
                    'kode_makanan' => $nyimpen->kode,
                    'nama' => $nyimpen->nama,
                    'kategori' => $nyimpen->kategori,
                    'harga' => $nyimpen->harga,
                    'ket' => $nyimpen->ket,
                ]);
        } else {
            
            Makanan::create([
                'kode_makanan' => $nyimpen->kode,
                'nama' => $nyimpen->nama,
                'kategori' => $nyimpen->kategori,
                'harga' => $nyimpen->harga,
                'ket' => $nyimpen->ket,
            ]);

        }

        return redirect('/menu');
    }

    public function delete($id)
    {
        Makanan::find($id)->delete();

        return redirect ('/menu');
    }

}
