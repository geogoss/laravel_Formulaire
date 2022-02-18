<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function index(){
        $members = Member::all();
        return view('pages.member', compact('members'));
    }

    function create(){
        return view('pages.createMember');
    }

    function store(Request $request){
        $store = new Member();
        $store->name = $request->name;
        $store->age = $request->age;
        $store->genre = $request->genre;
        $store->save();
        return redirect('/member');
    }
}
