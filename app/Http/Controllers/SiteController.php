<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use App\Event;
use App\Artikel;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {   
        $kegiatan = Kegiatan::all();
        $event = Event::all();
        return view('sites.home', compact('kegiatan', 'event'));
    }

    public function tentang()
    {
        return view('layouts.tentang');
    }

    public function event()
    {
        $event = Event::all();
        return view('layouts.event', compact('event'));
    }

    public function eventdetail($id)
    {
        $data = Event::find($id);
        return view('layouts.eventdetail', compact('data'));
    }

    public function kegiatan()
    {
        $kegiatan = Kegiatan::all();
        return view('layouts.kegiatan',  compact('kegiatan'));
    }

    public function artikel()
    {
        $artikel = Artikel::all();
        return view('layouts.artikel', compact('artikel'));
    }

    public function informasi()
    { 
        return view('layouts.informasi');
    }

    public function kontak()
    {
        return view('layouts.kontak');
    }

}
