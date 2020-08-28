<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use App\Event;
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

    public function eventdetail()
    {
        $event = Event::all();
        return view('layouts.eventdetail', compact('event'));
    }

    public function kegiatan()
    {
        $kegiatan = Kegiatan::all();
        return view('layouts.kegiatan',  compact('kegiatan'));
    }

    public function artikel()
    {
        return view('layouts.artikel');
    }

    public function kontak()
    {
        return view('layouts.kontak');
    }

}
