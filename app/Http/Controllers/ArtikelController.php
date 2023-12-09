<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use DataTables;

class ArtikelController extends Controller
{
    public function index()
    {
        if(\request()->ajax()){
            $articles = Article::orderByDesc('id')->get();
            return DataTables::of($articles)
                ->make(true);
        }

        return view('artikel');
    }
    
    public function addArticle() 
    {
        return view('addarticle');
    }
    
    public function store(Request $request)
    {   
    Article::create([
        'tittle' => $request->tittle,
        'content' => $request->konten
        
    ]);

    
        return redirect()->route('artikel')->with('success', 'Berhasil menambahkan artikel baru!');   
    }
    
    public function delete($id) {
        Article::where("id",$id)->delete();

        return redirect()->back()->with('success', 'Artikel berhasil dihapus');
    }

    public function updateArticle($id) 
    {
        $article = Article::findOrFail($id);

        return view('updatearticle', compact('article'));
    }

    public function doUpdate(Request $request) {
        
        Article::where("id", $request->id)
        ->update([
            'tittle' => $request->tittle,
            'content' => $request->konten
        ]);

        return redirect()->route('artikel')->with('success', 'Berhasil menambahkan artikel baru!');   
    }

    public function detail($id) {
        $article = Article::findOrFail($id);
        return view('artikelshow', compact('article'));
    }
}

