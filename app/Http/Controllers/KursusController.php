<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    // Method untuk menampilkan daftar kursus
    public function index()
    {
        $kursus = Kursus::all();
        $materi = Materi::pluck('judul', 'id');
        return view('kursus.index', compact('kursus', 'materi'));
    }

    // Method untuk menampilkan form tambah kursus
    public function create()
    {
        return view('kursus.create');
    }

    // Method untuk menyimpan data kursus baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date'
        ]);

        $kursus = new Kursus();
        $kursus->judul = $request->judul;
        $kursus->deskripsi = $request->deskripsi;
        $kursus->tanggal_mulai = $request->tanggal_mulai;
        $kursus->tanggal_berakhir = $request->tanggal_berakhir;
        $kursus->save();

        return redirect()->route('kursus.index')->with('success', 'Kursus berhasil ditambahkan');
    }

    public function editMateriRelationship($id)
    {
        $kursus = Kursus::findOrFail($id);
        $materi = Materi::all();
        return view('kursus.edit-materi-relationship', compact('kursus', 'materi'));
    }

    public function updateMateriRelationship($id)
    {
        $kursus = Kursus::findOrFail($id);
        request()->validate([
            'materi_ids' => 'array|exists:materis,id',
            'materi_ids.*' => 'integer'
        ]);
        if(!empty(request()->materi_ids)){
                $kursus->materi()->sync(request()->materi_ids);

        }
        return redirect()->route('kursus.show', $kursus->id)->with('success', 'Materi Relationship berhasil diubah');
    }

    // Method untuk menampilkan detail kursus berdasarkan id
    public function show($id)
    {
        $kursus = Kursus::findOrFail($id);
        return view('kursus.show', compact('kursus'));
    }

    // Method untuk menampilkan form edit kursus berdasarkan id
    public function edit($id)
    {
        $kursus = Kursus::findOrFail($id);
        return view('kursus.edit', compact('kursus'));
    }

    // Method untuk mengupdate data kursus ke database berdasarkan id
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date'
        ]);

        $kursus = Kursus::findOrFail($id);
        $kursus->judul = $request->judul;
        $kursus->deskripsi = $request->deskripsi;
        $kursus->tanggal_mulai = $request->tanggal_mulai;
        $kursus->tanggal_berakhir = $request->tanggal_berakhir;
        $kursus->save();

        return redirect()->route('kursus.index')->with('success', 'Kursus berhasil diupdate');
    }

    // Method untuk menghapus data kursus dari database berdasarkan id
    public function destroy($id)
    {
        $kursus = Kursus::findOrFail($id);
        $kursus->delete();

        return redirect()->route('kursus.index')->with('success', 'Kursus berhasil dihapus');
    }
}
