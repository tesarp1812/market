@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{ route('barang.index') }}" role="button">kembali</a>
    </div>
    <div class="container">
        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <ul>
                <div>
                    <label class="font-weight-bold">Nama</label>
                    <input class="form-control" type="text" name="name" placeholder=" Nama Barang"
                        aria-label="default input example">
                </div>
                <div>
                    <label class="font-weight-bold">Jumlah</label>
                    <input class="form-control" type="number" name="jumlah" placeholder=" Jumlah Barang"
                        aria-label="default input example">
                </div>
                <div>
                    <label class="font-weight-bold">Harga</label>
                    <input class="form-control" type="number" name="harga" placeholder=" Harga Barang"
                        aria-label="default input example">
                </div>
                <div>
                    <label class="font-weight-bold">Gambar</label>
                    <input class="form-control" type="file" name="gambar" placeholder=" "
                        aria-label="default input example">
                </div>
            </ul>
            <input type="submit" class="btn btn-primary" value="Simpan data">
        </form>
    </div>
@endsection
