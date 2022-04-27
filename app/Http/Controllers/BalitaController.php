<?php

namespace App\Http\Controllers;
use App\Models\Balita;
use Illuminate\Http\Request;

class BalitaController extends Controller
{

    public function index()
    {
        $balitas = Balita::all();
        return view('balita.index', compact('balitas'));
    }

    public function create()
    {
        return view('balita.create');
    }

    public function store(Request $request)
    {
        $store = $request->validate([
            'name' => ['required', 'string'],
            'jk' => ['required', 'string'],
            'usia' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
            'tinggi' => ['required', 'string']
        ]);

        return Balita::create($store)
            ? redirect()->route('balita.index')->with('success', 'berhasil menambahkan data Balita')
            : redirect()->route('balita.index')->with('success', 'gagal menambahkan data Balita');
    }
}
