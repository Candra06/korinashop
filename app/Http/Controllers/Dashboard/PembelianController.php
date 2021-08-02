<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Pembelian;
use App\Produk;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  Pembelian::leftJoin('produk', 'produk.id', 'pembelian.id_produk')
        ->select('produk.nama', 'pembelian.*')
        ->get();
        // return $data;
        return view('dashboard.penjualan.index', compact('data'));
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
        $request->validate([
            'nama_pembeli' => 'required',
            'email_pembeli' => 'required',
            'telepon_pembeli' => 'required',
            'alamat_pembeli' => 'required',
            'jumlah' => 'required',
            'id_produk' => 'required',
        ]);

        $stok = Produk::where('id', $request['id_produk'])->select('stok')->first();
        $sisa = $stok['stok'] - $request['jumlah'];
        // return $sisa;

        $input['nama_pembeli'] = $request['nama_pembeli'];
        $input['email_pembeli'] = $request['email_pembeli'];
        $input['telepon_pembeli'] = $request['telepon_pembeli'];
        $input['alamat_pembeli'] = $request['alamat_pembeli'];
        $input['id_produk'] = $request['id_produk'];
        $input['jumlah'] = $request['jumlah'];
        $input['catatan'] = $request['catatan'];

        try {
            Pembelian::create($input);
            Produk::where('id', $request['id_produk'])->update(['stok' => $sisa]);
            return redirect('/'.'#pemesanan')->with('sukses', 'Berhasil melakukan pemesanan');
        } catch (\Throwable $th) {
            // return $th;
            return redirect('/'.'#pemesanan')->with('gagal', 'Gagal melakukan pemesanan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  Pembelian::leftJoin('produk', 'produk.id', 'pembelian.id_produk')
        ->select('produk.nama', 'pembelian.*')
        ->where('pembelian.id', $id)
        ->first();
        // return $data;
        return view('dashboard.penjualan.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelian $pembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelian $pembelian)
    {
        //
    }
}
