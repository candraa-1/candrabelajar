<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class datasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = siswa::all();

        return view('datasiswa' , compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $siswa = new siswa();
        $siswa -> nama = $request -> nama;
        $siswa -> no_absen = $request -> no_absen;
        $siswa -> jurusan = $request -> jurusan;
        $siswa -> kelas = $request -> kelas;
        $siswa -> alamat = $request -> alamat;
        $siswa ->save();

        return redirect('/siswa');
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
        $siswa = siswa::find($id);
        $siswa -> nama = $request -> nama;
        $siswa -> no_absen = $request -> no_absen;
        $siswa -> jurusan = $request -> jurusan;
        $siswa -> kelas = $request -> kelas;
        $siswa -> alamat = $request -> alamat;
        $siswa -> save();

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = siswa::find($id);
        $siswa -> delete();
          return redirect('/siswa');
    }

    public function siswa_view(){
        return view('siswa.tambah');
    }
    public function update_view($id){
        $siswa = siswa::find($id);
        return view('siswa.edit' , compact('siswa'));
        }
}
