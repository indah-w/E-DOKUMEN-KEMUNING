<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use App\Member;
class ReportController extends Controller
{
    public function index() {
        $report = Report::all();
        $jumlahRumahTetap = Member::where('status_rumah', 'tetap')->count();
        $jumlahRumahTidakTetap = Member::where('status_rumah', 'tidak tetap')->count();
        $jumlahAnak = Member::all()->sum('jumlah_anak');
        $jumlahMemilikiTempatSampah = Member::where('memiliki_tempat_sampah', 'ya')->count();
        $jumlahBiopori = Member::all()->sum('jumlah_biopori');
        $jumlahAnggotaBankSampah = Member::where('anggota_bank_sampah', 'ya')->count();
        $jumlahKepalaKeluarga = Member::all()->groupBy('nama_kartu_keluarga')->count();
        return view('report.index', compact('report', 'jumlahRumahTetap', 'jumlahRumahTidakTetap', 'jumlahAnak', 'jumlahMemilikiTempatSampah', 'jumlahBiopori', 'jumlahAnggotaBankSampah', 'jumlahKepalaKeluarga'));
    }

    public function create() {
        return view('report.create');
    }

    public function store(Request $request) {
        Report::create($request->all());
        return redirect()->route('report.index')->with('status', 'Report Stored!!!')->with('success', true);
    }

    public function edit(Report $report) {
        return view('report.edit', compact('report', 'status'));
    }

    public function update(Request $request, Report $report) {

        $report->update($request->all());
        return redirect()->route('report.index')->with('status', 'Report updated!!!')->with('success', true);
    }

    public function destroy(Report $report) {
        $report->delete();
        return redirect()->route('report.index')->with('status', 'Report deleted!!!')->with('success', true);
    }
}
