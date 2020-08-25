<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {
        $report = Report::all();
        return view('report.index', compact('report'));
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
