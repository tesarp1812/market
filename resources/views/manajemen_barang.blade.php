@extends('layouts.app')

@section('content')
    <a class="btn btn-primary" href="{{ route('barang.create') }}">tambah barang</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">nama barang</th>
                <th scope="col">jumlah</th>
                <th scope="col">harga</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $b)
                <tr>
                    <td>{{ $b->name }}</td>
                    <td>{{ $b->jumlah }}</td>
                    <td>Rp {{ $b->harga }}</td>
                    <td>
                        <ul class="nav">
                            <a class="btn btn-primary" href="{{ route('barang.edit', $b->id) }}" role="button">Edit</a>
                            <form action="{{ route('barang.destroy', $b->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
