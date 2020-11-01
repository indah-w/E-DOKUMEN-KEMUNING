<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Komart;
use Illuminate\Http\Request;

class KomartController extends Controller
{
    public function store(Request $request) {
        Komart::create($request->all());
        $data = Artikel::find($request->artikel_id);
        // dd($data);
        return redirect()->back();
    }
}
