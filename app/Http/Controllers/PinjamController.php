<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $buku = DB::table('bukus')->where('id', 7)->value('id');
        $pinjam = pinjam::all();

        return view('bukupinjaman', compact('pinjam'));
    }

    public function pinjam(Request $request, $id)
    {

        $data = [
            // 'id' => $request->id,
            'nama_buku' => $request->nama_buku,
            'gambar_buku' => $request->gambar_buku,
            'penerbit_buku' => $request->penerbit_buku,
            'pengarang_buku' => $request->pengarang_buku,
            'isbn' => $request->isbn,
        ];

        $jalan = pinjam::create($data);
        if (!$jalan) {
            return 'anda sudah pinjam';
        }
        return redirect('/pinjaman');


        // return $data;
        // buku::create($data);
        // $data = buku::where('id', $id)->first();
        // pinjam::create($data);
        // $data = buku::where('id', $id)->first();
        // pinjam::create($data);
    }
    public function delete($id)
    {
        pinjam::where('id', $id)->delete();
        return redirect('/pinjaman');
    }
    public function baca(Request $request)
    {
        // $data = [
        //     'id' => $request->id,
        //     'nama_buku' => $request->nama_buku,
        //     'gambar_buku' => $request->gambar_buku,
        //     'penerbit_buku' => $request->penerbit_buku,
        //     'pengarang_buku' => $request->pengarang_buku,
        //     'isbn' => $request->isbn,
        // ];
        // $pinjam = pinjam::all();
        // $nama_buku = 'nama_buku';
        // $gambar_buku = 'gambar_buku';
        // $penerbit_buku = 'penerbit_buku';
        // $pengarang_buku = 'pengara_buku';
        // $isbn = 'isbn';

        $data = [
            'id' => $request->id,
            'nama_buku' => $request->nama_buku,
            'gambar_buku' => $request->gambar_buku,
            'penerbit_buku' => $request->penerbit_buku,
            'pengarang_buku' => $request->pengarang_buku,
            'isbn' => $request->isbn,
        ];

        // dd($data);
        return view('baca', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function purabaca()
    {
        return view('purabaca');
    }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function show(pinjam $pinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function edit(pinjam $pinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pinjam $pinjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(pinjam $pinjam)
    {
        //
    }
}
