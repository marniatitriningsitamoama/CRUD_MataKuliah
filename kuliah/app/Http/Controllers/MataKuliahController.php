<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliahs = MataKuliah::all();
        //render view with dataadmin
        return view('matakuliahs.index', compact('matakuliahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliahs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_matkul' => 'required',
            'SKS' => 'required',
            'baru_ulang' => 'required',
            'nilai' => 'required',
        ]);

        MataKuliah::create($request->all());

        return redirect()->route('matakuliahs.index')
            ->with('success', 'MataKuliah created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('matakuliahs.show', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('matakuliahs.edit', compact('matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_matkul' => 'required',
            'SKS' => 'required',
            'baru_ulang' => 'required',
            'nilai' => 'required',
        ]);
        $matakuliah = MataKuliah::findOrFail($id);

        $matakuliah->update($request->all());

        return redirect()->route('matakuliahs.index')
            ->with('success', 'matakuliah updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        $matakuliah->delete();

        return redirect()->route('matakuliahs.index')
            ->with('success', 'matakuliah deleted successfully');
    }
}
