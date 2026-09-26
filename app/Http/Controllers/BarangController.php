<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();

        return view('barang' , compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        Barang::create($validated);
        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = Barang:: find($id);
       $validated = $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $barang->update($validated);
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $barang = Barang::find($id);
          $barang -> delete();
          return redirect('/barang');
    }

    public function store_view(){
        return view('barang.tambah');
    }
    public function update_view($id){
        $barang = Barang::find($id);
        return view('barang.edit' , compact('barang'));
        }

}
