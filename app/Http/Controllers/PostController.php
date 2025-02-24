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

        return view('blogpost', ['text' => optional($text)->text ?? 'Geen tekst beschikbaar']);
    }

    public function index()
    {
        $blogposts = Blogpost::all(); // Haal alle blogposts op
        return view('blog', compact('blogposts')); // Stuur ze naar de view
    }


}
