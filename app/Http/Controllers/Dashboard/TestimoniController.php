<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Testimoni::all();
        return view('dashboard.testimoni.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return phpinfo();
        return view('dashboard.testimoni.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        if ($request['tipe'] =='foto') {
            $request->validate([
                'file' => 'required|mimes:jpeg,bmp,png'
            ]);
        } else {
            $request->validate([
                'file' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'
            ]);
        }
        
       
        $fileType = $request->file('file')->extension();
        $name = Str::random(8) . '.' . $fileType;
        $input['tipe'] = $request['tipe'];
        $input['file'] = Storage::putFileAs('testimoni', $request->file('file'), $name);;
        try {
            Testimoni::create($input);
            return redirect('/dashboard/testimoni/data')->with('status', 'Berhasil menambah data');
        } catch (\Throwable $th) {
            return $th;
            return redirect('/dashboard/testimoni/data/create')->with('status', 'Gagal menambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        try {
            Testimoni::where('id', $id)->delete();
            return redirect('/dashboard/testimoni/data')->with('status', 'Berhasil menghapus data');
        } catch (\Throwable $th) {
            return redirect('/dashboard/testimoni/data')->with('status', 'Gagal menghapus data');
        }
    }
}
