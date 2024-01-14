<?php

namespace App\Http\Controllers;

use App\Models\ItemPembelian;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $item_pembelian = ItemPembelian::get()->groupBy('pembelian_id');
        $data = array();
        foreach ($item_pembelian as $item) {
            $data[] = array(
                'nama' => $item[0]->pembelian->nama,
                'alamat' => $item[0]->pembelian->alamat,
                'wa' => $item[0]->pembelian->wa,
                'tanggal' => $item[0]->pembelian->tanggal,
                'total_order' => $item->count(),
                'produk' => $item->map(function ($item) {
                    return array(
                        'nama' => $item->product->nama,
                        'harga' => $item->product->harga,
                        'quantity' => $item->quantity,
                        'subtotal' => $item->product->harga * $item->quantity
                    );
                }),
                'total_harga' => $item[0]->pembelian->total_harga
            );
        }
        return view('pages.Admin.index', compact('data'));
    }
}
