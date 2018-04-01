<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'message' => 'required|string|max:255|alpha_num_space',
            'delay' => 'required|integer|min:1|max:1000',
        ]);

        $message = new Message();
        $message->data = $request->input('message');
        $message->delay = $request->input('delay');
        $message->status = 0;
        $message->save();

        return redirect()->route('pages.index');
    }
}
