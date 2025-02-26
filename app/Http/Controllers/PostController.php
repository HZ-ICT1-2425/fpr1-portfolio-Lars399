<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function getText($id)
    {
        $text = Blogpost::find($id);

        if (!$text) {
            abort(404, 'No blog posts found');
        }

        return view('blogpost', ['text' => optional($text)->text ?? 'No available text']);
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

        return redirect()->back()->with('success', 'Text deleted successfully!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'introtext' => 'required|string|max:500',
            'smalltext' => 'required|string',
            'text' => 'required|string',
        ]);

        Blogpost::create([
            'title' => $request->title,
            'introtext' => $request->introtext,
            'smalltext' => $request->smalltext,
            'text' => $request->text,
        ]);

        return redirect()->back()->with('success', 'Blogpost created succesfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'introtext' => 'required|string|max:500',
            'smalltext' => 'required|string',
            'text' => 'required|string',
        ]);

        $blogpost = Blogpost::findOrFail($id);
        $blogpost->update([
            'title' => $request->title,
            'introtext' => $request->introtext,
            'smalltext' => $request->smalltext,
            'text' => $request->text,
        ]);

        return redirect()->back()->with('success', 'Blogpost updated succesfully!');
    }


}
