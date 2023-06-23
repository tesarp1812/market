<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class CatalogController extends Controller
{
    //
    public function index()
    {
        $barang = Barang::get();
        // dd($barang);
        return view('catalog', compact('barang'));
    }
}
