<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\ItemPembelian;
use App\Models\Pembelian;
use App\Models\Product;
use App\Models\ProfilToko;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $cart = Cart::all();
        return view('index', compact('products', 'categories', 'cart'));
    }
    public function detail(Product $product)
    {
        return view('single-product', compact('product'));
    }
    public function add_cart(Product $product, Request $request)
    {
        try {
            $cart = Cart::where('product_id', $product->id)->first();
            if ($cart) {
                Cart::where('product_id', $product->id)->update([
                    'product_id' => $product->id,
                    'quantity' => $cart->quantity + $request->quantity
                ]);
            } else {
                Cart::create([
                    'product_id' => $product->id,
                    'quantity' => $request->quantity
                ]);
            }
            return to_route('index');
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error', 'Gagal menambah produk ke dalam keranjang']);
        }
    }
    public function add_qty_cart(Product $product)
    {
        try {
            $cart = Cart::where('product_id', $product->id)->first();
            Cart::where('product_id', $product->id)->update([
                'product_id' => $product->id,
                'quantity' => $cart->quantity + 1
            ]);
            return redirect()->back()->with(['success', 'Berhasil menambah produk ke dalam keranjang']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error', 'Gagal menambah produk ke dalam keranjang']);
        }
    }
    public function min_qty_cart(Product $product)
    {
        try {
            $cart = Cart::where('product_id', $product->id)->first();
            Cart::where('product_id', $product->id)->update([
                'product_id' => $product->id,
                'quantity' => $cart->quantity - 1
            ]);
            return redirect()->back()->with(['success', 'Berhasil menambah produk ke dalam keranjang']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error', 'Gagal menambah produk ke dalam keranjang']);
        }
    }
    public function checkout()
    {
        $cart = Cart::all();
        $profil = ProfilToko::first();
        $total_pembayaran = 0;
        foreach ($cart as $c) {
            $total_pembayaran += $c->product->harga * $c->quantity;
        }
        return view('checkout', compact('cart', 'profil', 'total_pembayaran'));
    }
    public function order(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'wa' => 'required',
            'alamat' => 'required',
            'total_harga' => 'required',
        ]);
        try {
            $cart = Cart::all();
            $pembelian = Pembelian::create([
                'nama' => $request->nama,
                'tanggal' => date('Y-m-d'),
                'wa' => $request->wa,
                'alamat' => $request->alamat,
                'metode' => "Transfer",
                'total_harga' => $request->total_harga
            ]);
            foreach ($cart as $item) {
                ItemPembelian::create([
                    'pembelian_id' => $pembelian->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'harga' => $item->product->harga,
                ]);
            }
            Cart::truncate();
            return response()->json(['success', 'Berhasil melakukan order']);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
}
