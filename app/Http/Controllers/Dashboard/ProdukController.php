<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Produk::all();
        return view('dashboard.produk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.produk.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $fileType = $request->file('foto')->extension();
        $name = Str::random(8) . '.' . $fileType;
        $input['nama'] = $request['nama'];
        $input['harga'] = $request['harga'];
        $input['stok'] = $request['stok'];
        $input['deskripsi'] = $request['deskripsi'];
        $input['foto'] = Storage::putFileAs('produk', $request->file('foto'), $name);
        try {
            Produk::create($input);
            return redirect('/dashboard/produk/index')->with('status', 'Berhasil menambah data');
        } catch (\Throwable $th) {
            return redirect('/dashboard/produk/index/create')->with('status', 'Gagal menambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Produk::where('id', $id)->first();
        // return $data;
        return view('dashboard.produk.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $id;
        if ($request['foto']) {
            $fileType = $request->file('foto')->extension();
            $name = Str::random(8) . '.' . $fileType;
            $input['foto'] = Storage::putFileAs('produk', $request->file('foto'), $name);
        }
        $input['nama'] = $request['nama'];
        $input['harga'] = $request['harga'];
        $input['stok'] = $request['stok'];
        $input['deskripsi'] = $request['deskripsi'];
        try {
            Produk::where('id',$id)->update($input);
            return redirect('/dashboard/produk/index')->with('status', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return redirect('/dashboard/produk/index/'.$id.'/edit')->with('status', 'Gagal menambah data');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        try {
            Produk::where('id', $id)->delete();
            return redirect('/dashboard/produk/index')->with('status', 'Berhasil menghapus data');
        } catch (\Throwable $th) {
            return redirect('/dashboard/produk/index')->with('status', 'Gagal mengubah data');
        }
    }
}
