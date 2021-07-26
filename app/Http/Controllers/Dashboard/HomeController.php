<?php

namespace App\Http\Controllers\Dashboard;

use App\Blog;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Produk;
use App\User;
use App\Quote;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::whereNotIn('id', [1])->where('role_id', 3)->count();

        return view('dashboard.home.index', compact('user'));
    }

    public function front()
    {
        $produk = Produk::all();
        $blog = Blog::all();
        return view('frontend.index', compact('produk', 'blog'));
    }

    public function blog($id)
    {
        $data = Blog::where('id', $id)->first();
        return view('frontend.blog', compact('data'));
    }

    
}
