@extends('layouts.app')

@section('content')
    <div class="px-4 py-5 my-5 text-center">
        @foreach ($barang as $b)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ asset('storage/barang/' . $b->gambar) }}" alt="">
                    <h3 class="card-subtitle mb-2 text-body-secondary">{{ $b->name }}</h3>
                    <label class="card-text">
                        <p>Harga</p>
                        <p>Rp {{ $b->harga }}</p>
                    </label>
                    <p class="card-text">Stok {{ $b->jumlah }}</p>
                    <a href="#" class="btn btn-primary">Beli</a>
                    <a href="#" class="btn btn-primary">Tambah Keranjang</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
