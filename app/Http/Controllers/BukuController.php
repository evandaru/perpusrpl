<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $buku = buku::all();
        return view('addbook', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'nama_buku' => $request->nama_buku,
            'gambar_buku' => $request->gambar_buku,
            'penerbit_buku' => $request->penerbit_buku,
            'pengarang_buku' => $request->pengarang_buku,
            'isbn' => $request->isbn,
        ];
        buku::create($data);
        return redirect()->to('add');
        // return "aku suka ikannnn😎😎😎😎";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = buku::where('id', $id)->first();
        // return 'hi' . $id;
        return view('edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'nama_buku' => $request->nama_buku,
            'gambar_buku' => $request->gambar_buku,
            'penerbit_buku' => $request->penerbit_buku,
            'pengarang_buku' => $request->pengarang_buku,
            'isbn' => $request->isbn,
        ];
        // buku::create($data);
        buku::where('id', $id)->update($data);
        return redirect()->to('add');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        buku::where('id', $id)->delete();
        return redirect()->to('add');
    }
}
