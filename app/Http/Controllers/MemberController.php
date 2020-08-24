<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $member = Member::all();
        return view('member.index', compact('member'));
    }

    public function create() {
        return view('member.create');
    }

    public function store(Request $request) {
        Member::create($request->all());
        return redirect()->route('member.index')->with('status', 'Member Stored!!!')->with('success', true);
    }

    public function edit(Member $member, $id) {
        $member = Member::find($id);
        return view('member.edit', compact('member', 'status'));
    }

    public function update(Request $request, Member $member, $id) {
        $member = Member::find($id);
        $member->update($request->all());
        return redirect()->route('member.index')->with('status', 'Member updated!!!')->with('success', true);
    }

    public function destroy(Member $member, $id) {
        $member = Member::find($id);
        $member->delete();
        return redirect()->route('member.index')->with('status', 'Member deleted!!!')->with('success', true);
    }
}
