<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogpost;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function getText($id)
    {
        $text = Blogpost::find($id);

        if (!$text) {
            abort(404, 'Post niet gevonden');
        }

        Log::info('Blogpost data:', ['text' => optional($text)->text]);


        return view('blogpost', ['text' => optional($text)->text ?? 'Geen tekst beschikbaar']);
    }
}
