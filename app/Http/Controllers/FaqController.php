<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{

    public function getText($id)
    {
        $text = Faq::find($id);

        if (!$text) {
            abort(404, 'FAQ niet gevonden');
        }

        return view('faq', ['text' => optional($text)->text ?? 'Geen tekst beschikbaar']);
    }


    public function index()
    {
        $faqposts = Faq::all(); // Haal alle blogposts op
        return view('faq', compact('faqposts')); // Stuur ze naar de view
    }
}
