<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        $category = Category::all();
        return view('pages.Admin.produk.index', compact('product', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'category_id' => 'required|exists:categories,id',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpg,png',
            'stok' => 'required|numeric'
        ]);
        try {
            $request->file('gambar')->store('public/product');
            $product = Product::create([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'category_id' => $request->category_id,
                'deskripsi' => $request->deskripsi,
                'stok' => $request->stok,
                'gambar' => 'storage/product/' . $request->file('gambar')->hashName(),
            ]);
            return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Produk gagal ditambahkan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'category_id' => 'required|exists:categories,id',
            'deskripsi' => 'required',
            'gambar' => 'nullable|mimes:jpg,png',
        ]);
        try {
            if ($product->gambar && file_exists(public_path($product->gambar))) {
                unlink(public_path($product->gambar));
            }
            $request->file('gambar')->store('public/product');
            $product->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'category_id' => $request->category_id,
                'deskripsi' => $request->deskripsi,
                'gambar' => 'storage/product/' . $request->file('gambar')->hashName(),
            ]);
            return redirect()->back()->with('success', 'Produk berhasil diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Produk gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            if ($product->gambar && file_exists(public_path($product->gambar))) {
                unlink(public_path($product->gambar));
            }
            $product->delete();
            return redirect()->back()->with('success', 'Produk berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Produk gagal dihapus');
        }
    }
}
