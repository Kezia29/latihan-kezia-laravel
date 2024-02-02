@extends('template.index')

@section('title', 'Home')

@section('content')

<div class="container my-4">

    <div class="row">
        <div class="col-12">
            <a href="/kategori/add">
                <button type="button" class="btn btn-dark">Tambah Kategori</button>
            </a> 
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Keterangan</th>
                            <th style="max-width :100px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)

                        <tr>
                            <th scope="row">{{ $row->kode_kategori}}</th>
                            <td>{{ $row->nama}}</td>
                            <td>{{ $row->ket}}</td>
                            <td>
                                <a href ="/kategori/{{ $row->kode_kategori}}/edit">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </a>

                                <a href ="/kategori/{{ $row->kode_kategori}}/delete">
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
