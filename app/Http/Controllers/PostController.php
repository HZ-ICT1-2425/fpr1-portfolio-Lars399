<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
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
        $blogposts = Blogpost::all();
        return view('blog', compact('blogposts'));
    }

    public function destroy($id)
    {
        $blogpost = BlogPost::findOrFail($id);
        $blogpost->delete();

        return redirect()->back()->with('success', 'Het bericht is succesvol verwijderd!');
    }

}
