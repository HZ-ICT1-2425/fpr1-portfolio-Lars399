<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function getText($id)
    {
        $text = Faq::find($id);

        if (!$text) {
            abort(404, 'No FAQ posts found');
        }

        return view('faq', ['text' => optional($text)->text ?? 'No text available']);
    }


    public function index()
    {
        $faqposts = Faq::all();
        return view('faq', compact('faqposts'));
    }

    public function destroy($id)
    {
        $faqpost = Faq::findOrFail($id);
        $faqpost->delete();

        return redirect()->back()->with('success', 'FAQ post successfully deleted!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        Faq::create([
            'title' => $request->title,
            'text' => $request->text,
        ]);

        return redirect()->back()->with('success', 'FAQ succesfully created!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->update([
            'title' => $request->title,
            'text' => $request->text,
        ]);

        return redirect()->back()->with('success', 'FAQ succesfully updated!');
    }
}
