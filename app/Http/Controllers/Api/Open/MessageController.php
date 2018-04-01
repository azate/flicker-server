<?php

namespace App\Http\Controllers\Api\Open;

use Azate\MorseCode\MorseCode;
use App\Message;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
        $a = Message::where('status', 0)->first();

        if (!$a) {
            return [];
        }

        return [
            'id' => $a->id,
            'delay' => (int) $a->delay,
            'content' => (new MorseCode)->encode($a->data),
        ];
    }

    public function update($id)
    {
        $a = Message::where('id', $id)->where('status', 0)->first();

        if ($a) {
            $a->status = 1;
            $a->save();

            return 'ok';
        }

        return 'error';
    }

    public function list()
    {
        $a = Message::where('status', 0)->get();

        if (!$a) {
            return [];
        }

        return $a->pluck('data');
    }
}
