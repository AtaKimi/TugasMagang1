<?php

namespace App\Http\Controllers;

use App\Models\LinkMateri;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    // Konstruktor untuk controller ini
    public function __construct()
    {
        // Anda bisa menambahkan middleware atau kode lainnya di sini
    }

    // Method untuk menampilkan daftar materi
    public function index()
    {
        // Mengambil semua data materi dari database
        $materi = Materi::all();

        // Mengirimkan data materi ke view materi.index
        return view('materi.index', compact('materi'));
    }

    // Method untuk menampilkan form tambah materi
    public function create()
    {
        // Mengirimkan data yang dibutuhkan ke view materi.create
        return view('materi.create');
    }

    // Method untuk menyimpan data materi baru ke database
    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_materi' => 'required|string',
        ]);

        // Buat objek materi baru dengan data dari form
        $materi = new Materi();
        $materi->judul = $request->judul;
        $materi->isi_materi = $request->isi_materi;

        // Simpan materi ke database
        $materi->save();

        // Redirect ke halaman show materi dengan pesan sukses
        return redirect()->route('materi.show', $materi)->with('success', 'Materi berhasil ditambahkan.');
    }

    public function editLinkMateriRelationship($id)
    {
        $materi = Materi::findOrFail($id);
        $link_materi = LinkMateri::all();
        return view('materi.edit-link-materi-relationship', compact('materi', 'link_materi'));
    }

    public function updateLinkMateriRelationship($id)
    {
        $materi = Materi::findOrFail($id);
        request()->validate([
            'link_materi_ids' => 'array|exists:materis,id',
            'link_materi_ids.*' => 'integer'
        ]);
        if(!empty(request()->link_materi_ids)){
                $materi->linkMateri()->sync(request()->link_materi_ids);
        }
        return redirect()->route('materi.show', $materi->id)->with('success', 'Link Materi Relationship berhasil diubah');
    }

    // Method untuk menampilkan detail materi berdasarkan id
    public function show($id)
    {
        // Mencari data materi dari database berdasarkan id
        $materi = Materi::findOrFail($id);

        // Mengirimkan data materi ke view materi.show
        return view('materi.show', compact('materi'));
    }

    // Method untuk menampilkan form edit materi berdasarkan id
    public function edit($id)
    {
        // Mencari data materi dari database berdasarkan id
        $materi = Materi::findOrFail($id);

        // Mengirimkan data materi ke view materi.edit
        return view('materi.edit', compact('materi'));
    }

    // Method untuk mengupdate data materi ke database berdasarkan id
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_materi' => 'required|string',
        ]);

        // Buat objek materi baru dengan data dari form
        $materi = Materi::findOrFail($id);
        $materi->judul = $request->judul;
        $materi->isi_materi = $request->isi_materi;

        // Simpan materi ke database
        $materi->save();

        // Mengarahkan kembali ke halaman daftar materi dengan pesan sukses
        return redirect()->route('materi.index')->with('success', 'Materi berhasil diupdate');
    }

    // Method untuk menghapus data materi dari database berdasarkan id
    public function destroy($id)
    {
        // Mencari data materi dari database berdasarkan id
        $materi = Materi::findOrFail($id);

        // Menghapus file yang terkait dengan materi jika ada
        if ($materi->file) {
            Storage::delete('public/materi/' . $materi->file);
        }

        // Menghapus data materi dari database
        $materi->delete();

        // Mengarahkan kembali ke halaman daftar materi dengan pesan sukses
        return redirect()->route('materi.index')->with('success', 'Materi berhasil dihapus');
    }
}
