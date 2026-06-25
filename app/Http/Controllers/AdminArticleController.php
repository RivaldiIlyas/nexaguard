<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('admin.articles.index', compact('articles'));
    }

    public function exportPdf()
    {
        $articles = Article::latest()->get();

        $pdf = Pdf::loadView(
            'admin.articles.pdf',
            compact('articles')
        );

        return $pdf->download('laporan-articles.pdf');
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'description' => 'required',
        ]);

        $imagePath = $request->file('image')
            ->store('articles', 'public');

        Article::create([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect('/admin/articles')
            ->with('success', 'Article berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $article = Article::findOrFail($id);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {

            $imagePath = $request->file('image')
                ->store('articles', 'public');

            $data['image'] = $imagePath;
        }

        $article->update($data);

        return redirect('/admin/articles')
            ->with('success', 'Article berhasil diupdate.');
    }

    public function destroy($id)
    {
        Article::findOrFail($id)->delete();

        return redirect('/admin/articles')
            ->with('success', 'Article berhasil dihapus.');
    }
}