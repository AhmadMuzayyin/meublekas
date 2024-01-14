<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return view('pages.Admin.kategori.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        try {
            Category::create([
                'nama' => $request->nama,
            ]);
            return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('kategori.index')->with('error', 'Kategori gagal ditambahkan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        try {
            $category->update([
                'nama' => $request->nama,
            ]);
            return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->route('kategori.index')->with('error', 'Kategori gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->route('kategori.index')->with('error', 'Kategori gagal dihapus');
        }
    }
}
