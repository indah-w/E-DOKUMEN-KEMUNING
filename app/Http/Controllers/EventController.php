<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        return view('event.index', compact('event'));
    }

    public function list(Request $request)
    {
        $event = Event::where('status', $request->type)->get();
        return view('event.list', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $status = ['Harian', 'Bulanan', 'Tahunan'];
        return view('event.create', compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = Event::create($request->except('foto'));
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
            $event->foto = $filename;
            $event->save();
        }

        return redirect()->route('event.index')->with('status', 'Event stored!')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        // $status = ['Harian', 'Bulanan'];
        return view('event.edit', compact('event', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->update($request->all());
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
            if ($event->foto) {
            $old_foto = $event->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
            . DIRECTORY_SEPARATOR . $event->foto;
            try {
                 File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
            // ganti field foto dengan foto yang baru
            $event->foto = $filename;
            $event->save();
        }
        return redirect()->route('event.index')->with('status', 'Event updated!')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('event.index')->with('status', 'Event deleted!')->with('success', true);
    }
}
