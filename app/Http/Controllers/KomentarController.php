<?php

namespace App\Http\Controllers;

use App\Komentar;
use App\Event;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function store(Request $request) {
        Komentar::create($request->all());
        $data = Event::find($request->event_id);
        // dd($data);
        return redirect()->route('event_detail',[$data]);
    }
    
}
