<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DataTables;

class KategoriController extends Controller
{
    public function index()
    {
        if(\request()->ajax()){
            $categories = Category::orderByDesc('id')->get();
            return DataTables::of($categories)
                ->make(true);
        }

        return view('kategori');
    }

    public function delete($id) {
        Category::where("id",$id)->delete();

        return redirect()->back()->with('success', 'Kategori berhasil dihapus');
    }

    public function add(Request $request){
        return view("addkategori");
    }

    public function store(Request $request){
        Category::create([
            "name" => $request->name
        ]);

        return redirect()->route('kategori')->with('success', 'Berhasil menambahkan kategori baru!');
    }
}
