<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index() {
        $kegiatan = Kegiatan::all();
        return view('kegiatan.index', compact('kegiatan'));
    }

    public function create() {
        return view('kegiatan.create');
    }

    public function store(Request $request) {
        Kegiatan::create($request->all());
        return redirect()->route('kegiatan.index')->with('status', 'Kegiatan Stored!!!')->with('success', true);
    }

    public function edit(Kegiatan $kegiatan) {
        return view('kegiatan.edit', compact('kegiatan', 'status'));
    }

    public function update(Request $request, Kegiatan $kegiatan) {

        $kegiatan->update($request->all());
        return redirect()->route('kegiatan.index')->with('status', 'Kegiatan updated!!!')->with('success', true);
    }

    public function destroy(Kegiatan $kegiatan) {
        // $member = Member::find($id);
        $kegiatan->delete();
        return redirect()->route('kegiatan.index')->with('status', 'Kegiatan deleted!!!')->with('success', true);
    }
}
