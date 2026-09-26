<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class DataBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();

        return view ('databuku' , compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'tahun_terbit' => 'required|numeric',
            'stok' => 'required|integer'
        ]);

        Buku::create($validated);
        return redirect('/databuku');
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
        $buku = Buku:: find($id);
        $validated = $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'tahun_terbit' => 'required|numeric',
            'stok' => 'required|integer'
        ]);

        $buku->update($validated);
        return redirect('/databuku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::find($id);
        $buku -> delete();
        return redirect('/databuku');
    }

    public function buku_view(){
        return view('buku.tambah');
    }

    public function update_view($id){
        $buku = Buku::find($id);
        return view('buku.edit' , compact('buku'));
    }
}
