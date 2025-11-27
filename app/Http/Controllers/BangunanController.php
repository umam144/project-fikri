<?php

namespace App\Http\Controllers;

use App\Models\Tanah;       // <-- WAJIB ADA
use App\Models\Bangunan;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
     public function index() {
        $bangunan = Bangunan::all();
        return view('bangunan.index', ['items' => $bangunan]);
    }

    public function create()
{
    $tanahs = Tanah::all(); // ambil semua data tanah

    return view('bangunan.create', compact('tanahs'));
}


    public function store(Request $request) {
        $validated = $request->validate([
            'nama_bangunan' => 'required|string',
             'kode_bangunan' => 'required|string',
            'tanah_id' => 'required|string',
        ]);

        Bangunan::create($validated);
        return redirect()->route('bangunan.index')->with('success', 'Data Berhasil Ditambahkan!');
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
    public function edit(string $id)
    {
        $bangunan = Bangunan::find($id);
        return view('bangunan.edit', ['bangunan'=>$bangunan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_bangunan' => 'required|string',
            'kode_bangunan' => 'required|string',
            'tanah_id'  => 'required|string',
        ]);

        $bangunan = Bangunan::find($id);
        $bangunan->update($validated);
        return redirect()->route('bangunan.index')->with('success', 'Data Berhasil Dirubah!');
    }
    
    /**
     * Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
        Bangunan::destroy($id);
        return redirect()->route('bangunan.index')->with('success', 'Data Berhasil Dihapus!');
}

}