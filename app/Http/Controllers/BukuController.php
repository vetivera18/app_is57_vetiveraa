<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $nomor = 1;
        $buku =Buku::all();
        return view('buku.index', compact('nomor','buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.form'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create',Buku :: class);
        $buku = new Buku;

        $buku -> kode =$request->  kode ;
        $buku -> judul =$request-> judul ;
        $buku -> pengarang =$request-> pengarang ;
        $buku -> halaman  =$request-> halaman ;
        $buku -> penerbit =$request->  penerbit;
        $buku -> tahun_terbit =$request-> tahun ;
        $buku -> stok  =$request->  stok;
        $buku -> status  =$request->  status;
        $buku ->save();

        return redirect('/buku');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku =Buku::find($id);
        return view('buku.edit',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buku = Buku :: find($id);

        $buku -> kode =$request->  kode ;
        $buku -> judul =$request-> judul ;
        $buku -> pengarang =$request-> pengarang ;
        $buku -> halaman  =$request-> halaman ;
        $buku -> penerbit =$request->  penerbit;
        $buku -> tahun_terbit =$request-> tahun ;
        $buku -> stok  =$request->  stok;
        $buku -> status  =$request->  status;
        $buku ->save();

        return redirect('/buku');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $buku = Buku::find($id);
       $buku->delete();

       return redirect('buku');
    }
}
