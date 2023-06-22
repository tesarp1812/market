<a href="{{ route('barang.index') }}">kembali</a>
<form action="{{ route('barang.update', $barang->id) }}" method="POST">
    @csrf
    @method('PUT')
    <ul>
        nama <input type="text" name="name" required value="{{ $barang->name }}">
        jumlah <input type="text" name="jumlah" required value="{{ $barang->jumlah }}">
        harga <input type="text" name="harga" required value="{{ $barang->harga }}">
    </ul>
    <input type="submit" value="Simpan data">
</form>
