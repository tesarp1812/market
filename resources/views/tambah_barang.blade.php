<a href="{{ route('barang.index') }}">kembali</a>
<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <ul>
        nama <input type="text" name="name">
        jumlah <input type="text" name="jumlah">
        harga <input type="text" name="harga">
    </ul>
    <input type="submit" value="Simpan data">
</form>
