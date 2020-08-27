<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('sites.home');
    }

    public function tentang()
    {
        return view('layouts.tentang');
    }
    public function events()
    {
        return view('layouts.events');
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
    public function eventsdetail()
    {
        return view('layouts.eventsdetail');
    }
}
