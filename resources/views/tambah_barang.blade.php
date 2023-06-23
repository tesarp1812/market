@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="{{ route('barang.index') }}" role="button">kembali</a>
</div>
<div class="container">
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <ul>
            <div>
                Nama <input class="form-control" type="text" name="name" placeholder=" Nama Barang" aria-label="default input example">
            </div>
            <div>
                Jumlah <input class="form-control" type="text" name="jumlah" placeholder=" Jumlah Barang" aria-label="default input example">
            </div>
            <div>
                Harga <input class="form-control" type="text" name="harga" placeholder=" Harga Barang" aria-label="default input example">
            </div>
        </ul>
        <input type="submit" class="btn btn-primary" value="Simpan data">
    </form>
</div>
    
@endsection