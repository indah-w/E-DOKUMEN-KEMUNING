<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('kegiatan.index', compact('kegiatan'));
    }

    public function list(Request $request)
    {
        $kegiatan = Kegiatan::where('status', $request->type)->get();
        return view('kegiatan.list', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $status = ['Harian', 'Bulanan', 'Tahunan'];
        return view('kegiatan.create', compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kegiatan = Kegiatan::create($request->except('foto'));
        if ($request->hasFile('foto')) {
            // Mengambil file yang diupload
            $uploaded_foto = $request->file('foto');
            // mengambil extension file
            $extension = $uploaded_foto->getClientOriginalExtension();
            // membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
            // menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $uploaded_foto->move($destinationPath, $filename);
            // mengisi field cover di book dengan filename yang baru dibuat
            $kegiatan->foto = $filename;
            $kegiatan->save();
        }

        return redirect()->route('kegiatan.index')->with('status', 'Kegiatan stored!')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        // $status = ['Harian', 'Bulanan'];
        return view('kegiatan.edit', compact('kegiatan', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $kegiatan->update($request->all());
        if ($request->hasFile('foto')) {
            // menambil foto yang diupload berikut ekstensinya
            $filename = null;
            $uploaded_foto = $request->file('foto');
            $extension = $uploaded_foto->getClientOriginalExtension();
            // membuat nama file random dengan extension
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            // memindahkan file ke folder public/img
            $uploaded_foto->move($destinationPath, $filename);
            // hapus foto lama, jika ada
            if ($kegiatan->foto) {
            $old_foto = $kegiatan->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
            . DIRECTORY_SEPARATOR . $kegiatan->foto;
            try {
                 File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
            // ganti field foto dengan foto yang baru
            $kegiatan->foto = $filename;
            $kegiatan->save();
        }
        return redirect()->route('kegiatan.index')->with('status', 'Kegiatan updated!')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect()->route('kegiatan.index')->with('status', 'Kegiatan deleted!')->with('success', true);
    }
}
