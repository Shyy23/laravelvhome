<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = DB::table('vbarang')->get();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriList = Kategori::all();
        return view('barang.create', compact('kategoriList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'integer', 'max:11'],
            'stok' => ['required', 'integer']
        ]);

        $barang = new Barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->deskripsi = $request->deskripsi;
        $barang->id_kategori = $request->kategori;
        $barang->stok = $request->stok;

        $barang->save();

        return redirect()->route('barang.index')->with('status', 'Barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * @param \App\Models\Barang
     * @return \Illuminate\Contracts\View\View
     * 
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        // Ambil semua kategori
        $kategoris = Kategori::all();

        return view('barang.edit', compact('barang', 'kategoris'));
    }

    /**
     * @param \App\Models\Barang
     * @return \Illuminate\Http\RedirectResponse
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'int', 'max:11'],
            'stok' => ['required', 'integer']
        ]);
        Barang::where('id_barang', $barang->id_barang)
            ->update([
                'nama_barang' => $request->nama_barang,
                'deskripsi' => $request->deskripsi,
                'id_kategori' => $request->kategori,
                'stok' => $request->stok,
            ]);
        return redirect()->route('barang.index')->with('status', 'Barang Berhasil Di Edit!');
    }

    /**
     * @param \App\Models\Barang
     * @return \Illuminate\Http\RedirectResponse
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id_barang);
        return redirect()->route('barang.index')->with('status', 'Barang Berhasil Dihapus!');
    }
}
