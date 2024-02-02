@extends('template.index')

@section('title', 'Home')

@section('content')

    <div class="container my-4">
    <div class="row">
        <div class="col-12">
            <form action="/kategori/save" method="POST">

                    @csrf
                
                    @isset($data)
                    <input type="hidden" name="old_kode" value="{{ @$data->kode_kategori}}">
                    @endisset

                    
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode Kategori</label>
                    <input type="text" class="form-control" id="kode" name="kode"  placeholder="Tulis K0 sebagai awalan" value={{ @$data->kode_kategori }}>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama"  placeholder="Masukkan Kategori Makanan" value={{ @$data->nama }}>
                </div>
                <div class="mb-3">
                    <label for="kode" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="ket" name="ket"  placeholder="Tulis Keterangan" value={{ @$data->ket }}>
                </div>
                

                <button type="submit" class="btn btn-dark">Simpan</button>
            </form>
        </div>
    </div>
    </div>

@endsection