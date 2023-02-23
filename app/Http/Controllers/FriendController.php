<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index(Request $request)
    {
        $request->user();

        dump($request->user());
        return view('friend.index', ['friends' => $request->user()->friends]);
    }

    public function store(Request $request)
    {
        $request->user()->attach($request->input('friends'));
    }
}
