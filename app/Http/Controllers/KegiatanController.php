<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use GrahamCampbell\ResultType\Success;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatans = Kegiatan::latest()->paginate(10);
        return view('kegiatan.index',compact('kegiatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kegiatan' =>'required|unique:kegiatans',
            'nama_kegiatan' =>'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required',
            'penanggung_jawab' => 'required',
    ]);

    kegiatan::create($request->all());
    return redirect()->route('kegiatan.index')->with('success','kegiatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('kegiatan.show', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('kegiatan.edit',compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            'kode_kegiatan' => 'required|unique:kegiatans,kode_kegiatan,'.$kegiatan->id,
            'nama_kegiatan' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required',
            'penanggung_jawab' => 'required',
        ]);

        $kegiatan->update($request->all());
        return redirect()->route('kegiatan.index')->with('success','kegiatan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect()->route('kegiatan.index')->with('success','kegiatan berhasil dihapus');
    }
}
