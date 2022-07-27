<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;

class PeminjamanController extends Controller
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
        $peminjaman = Peminjaman :: all();
        return view ('peminjaman.index',compact('peminjaman','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
     $buku = Buku::all();
       return view('peminjaman.form',compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $peminjaman = new Peminjaman;

       $peminjaman-> juduls_id = $request-> judul;
       $peminjaman-> kode = $request-> kode ; 
       $peminjaman-> tgl_pinjam= $request-> tgl_pinjam; 
       $peminjaman-> tgl_kembali= $request-> tgl_kembali ; 
       $peminjaman->  status= $request-> status; 
       
       $peminjaman-> save();

       return redirect('/peminjaman');
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
        $peminjaman = Peminjaman ::find ($id);
        $buku = Buku ::all();
        return view ('peminjaman.edit',compact('peminjaman'));
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
        $peminjaman = Peminjaman :: find($id);

        // $peminjaman-> juduls_id = $request-> judul;
        // $peminjaman-> kode = $request-> kode ; 
        $peminjaman-> tgl_pinjam= $request-> tgl_pinjam; 
        $peminjaman-> tgl_kembali= $request-> tgl_kembali ; 
        $peminjaman->  status= $request-> status; 
        
        $peminjaman-> save();
 
        return redirect('/peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $peminjaman = Peminjaman :: find($id);
       $peminjaman -> delete();

       return redirect(('/peminjaman'));
    }
}
