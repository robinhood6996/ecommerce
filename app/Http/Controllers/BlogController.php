<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function Blogs()
    {
        $blogs = DB::table('posts')
            ->join('post_category', 'posts.category_id', 'post_category.id')
            ->select('posts.*', 'post_category.category_name_en', 'post_category.category_name_bn')
            ->get();

        return view('pages.blogs', compact('blogs'));
    }

    public function Bangla()
    {
        Session::get('lang');
        session()->forget('lang');
        Session::put('lang', 'bangla');
        return redirect()->back();
    }

    public function English()
    {
        Session::get('lang');
        session()->forget('lang');
        Session::put('lang', 'english');
        return redirect()->back();
    }
}
