<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $barang = Barang::get();
        // dd($barang);
        return view('manajemen_barang', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tambah_barang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the request
        // $this->validate($request, [
        //     'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
        // ]);

        //upload gambar
        $filename = time() . '.png';
        $request->file('gambar')->storeAs('/public/barang', $filename);
        // dd('done!');
        //
        Barang::create([
            'name' => $request->name,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'gambar' => $filename
        ]);

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $barang = Barang::where('id', $id)->first();
        return view('form_ubah', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $barang = Barang::find($id);
        $barang->name = $request->name;
        $barang->jumlah = $request->jumlah;
        $barang->harga = $request->harga;
        $barang->save();

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $barang = Barang::find($id);
        $barang->delete();

        return redirect()->route('barang.index');
    }
}
