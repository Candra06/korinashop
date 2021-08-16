<?php

namespace App\Http\Controllers\Dashboard;

use App\Blog;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Produk;
use App\User;
use App\Quote;
use App\Testimoni;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::whereNotIn('id', [1])->where('role_id', 3)->count();
        // return nl2br(shell_exec('cd ../../ && ls -a'));

        return view('dashboard.home.index', compact('user'));
    }

    public function front()
    {
        $produk = Produk::all();
        $blog = Blog::all();
        $testimoni = Testimoni::all();
        return view('frontend.index', compact('produk', 'blog', 'testimoni'));
    }

    public function blog($id)
    {
        $data = Blog::where('id', $id)->first();
        return view('frontend.blog', compact('data'));
    }

    
}
