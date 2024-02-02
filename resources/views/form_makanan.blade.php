@extends('template.index')

@section('title', 'Home')

@section('content')

    <div class="container my-4">
    <div class="row">
        <div class="col-12">
            <form action="/menu/save" method="POST">

                    @csrf
                
                    @isset($data)
                    <input type="hidden" name="old_kode" value="{{ @$data->kode_makanan}}">
                    @endisset

                    
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode Makanan</label>
                    <input type="text" class="form-control" id="kode" name="kode"  placeholder="Tulis M0 sebagai awalan" value={{ @$data->kode_kategori }}>
                </div>
                
                  
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="nama" name="nama"  placeholder="Masukkan Nama Makanan" value={{ @$data->nama }}>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga"  placeholder="Masukkan Harga Makanan" value={{ @$data->harga }}>
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Pilih Kategori</label>
                    <select name="kategori" class="form-control">
                        @foreach ($kategoris as $item)
                            <option value="{{ $item->kode_kategori }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
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