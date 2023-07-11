<?php

namespace App\Http\Controllers;

use App\Models\LinkMateri;
use Illuminate\Http\Request;

class LinkMateriController extends Controller
{
    // Display a listing of the link materi
    public function index()
    {
        $link_materi = LinkMateri::all();
        return view('link-materi.index', compact('link_materi'));
    }

    // Show the form for creating a new link materi
    public function create()
    {
        return view('link-materi.create');
    }

    // Store a newly created link materi in the database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'link' => 'required|url',
        ]);

        LinkMateri::create($request->all());
        return redirect()->route('link-materi.index')->with('success', 'Link materi berhasil ditambahkan');
    }

    // Display the specified link materi
    public function show($id)
    {
        $link_materi = LinkMateri::findOrFail($id);
        return view('link-materi.show', compact('link_materi'));
    }

    // Show the form for editing the specified link materi
    public function edit($id)
    {
        $link_materi = LinkMateri::findOrFail($id);
        return view('link-materi.edit', compact('link_materi'));
    }

    // Update the specified link materi in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'link' => 'required|url',
        ]);

        $link_materi = LinkMateri::findOrFail($id);
        $link_materi->update($request->all());
        return redirect()->route('link-materi.index')->with('success', 'Link materi berhasil diubah');
    }

    // Remove the specified link materi from the database
    public function destroy($id)
    {
        $link_materi = LinkMateri::findOrFail($id);
        $link_materi->delete();
        return redirect()->route('link-materi.index')->with('success', 'Link materi berhasil dihapus');
    }
}
