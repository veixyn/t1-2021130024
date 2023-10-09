<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('book');
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
        $validated = $request->validate([
            'isbn' => 'required|numeric|min:13',
            'judul' => 'required|string',
            'halaman' => 'required|numeric|digits_between:1,2',
            'kategori' => 'required',
            'penerbit' => 'required|string',
        ]);

        $book = new Book();
        $book -> isbn = $validated['isbn'];
        $book -> judul = $validated['judul'];
        $book -> halaman = $validated['halaman'];
        $book -> kategori = $validated['kategori'];
        $book -> penerbit = $validated['penerbit'];
        $book -> save();

        return redirect('/book')->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
