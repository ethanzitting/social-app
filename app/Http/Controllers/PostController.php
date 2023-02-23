<?php

namespace App\Http\Controllers;

use App\Events\TestEventSent;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PostController extends Controller
{
    public function store ()
    {
        return [];
    }

    /**
     * Display the user's profile form.
     */
    public function getCreateView(Request $request): View
    {
        broadcast(new TestEventSent(['burp']));

        return view('posts.create', [
            'user' => $request->user(),
        ]);
    }

    public function create(Request $request)
    {
        logger()->debug(json_encode($request->all(), 128));
        Posts::create([
            'user_id' => Auth::user()->id,
            'content' => $request->content,
        ]);

        logger()->debug(json_encode('Posts::get()', 128));
        logger()->debug(json_encode(Posts::get(), 128));
    }
}
