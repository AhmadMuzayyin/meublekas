<?php

namespace App\Http\Controllers;

use App\Models\ProfilToko;
use Illuminate\Http\Request;

class ProfilTokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = ProfilToko::first();
        return view('pages.Admin.profile', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'whatsapp' => 'required',
        ]);
        try {
            $profil = ProfilToko::first();
            if ($profil) {
                $profil->update([
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'whatsapp' => $request->whatsapp,
                ]);
            } else {
                ProfilToko::create([
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'whatsapp' => $request->whatsapp,
                ]);
            }
            return redirect()->route('profil.index')->with('success', 'Profil berhasil disimpan');
        } catch (\Throwable $th) {
            return redirect()->route('profil.index')->with('error', 'Profil gagal disimpan');
        }
    }
}
