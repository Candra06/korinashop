<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::all();
        return view('dashboard.blog.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blog.add');
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
        $input['judul'] = $request['judul'];
        $input['status'] = $request['status'];
        $input['konten'] = $request['konten'];
        $input['foto'] = Storage::putFileAs('blog', $request->file('foto'), $name);;
        try {
            Blog::create($input);
            return redirect('/dashboard/blog/index')->with('status', 'Berhasil menambah data');
        } catch (\Throwable $th) {
            return redirect('/dashboard/blog/index/create')->with('status', 'Gagal menambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Blog::where('id', $id)->first();
        // return $data;
        return view('dashboard.blog.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request['foto']) {
            $fileType = $request->file('foto')->extension();
            $name = Str::random(8) . '.' . $fileType;
            $input['foto'] = Storage::putFileAs('blog', $request->file('foto'), $name);;
        }
        $input['judul'] = $request['judul'];
        $input['status'] = $request['status'];
        $input['konten'] = $request['konten'];
        try {
            Blog::where('id', $id)->update($input);
            return redirect('/dashboard/blog/index')->with('status', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            
            return redirect('/dashboard/blog/index/'.$id.'/edit')->with('status', 'Gagal mengubah data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Blog::where('id', $id)->delete();
            return redirect('/dashboard/blog/index')->with('status', 'Berhasil menghapus data');
        } catch (\Throwable $th) {
            return redirect('/dashboard/blog/index')->with('status', 'Gagal mengubah data');
        }
    }
}
