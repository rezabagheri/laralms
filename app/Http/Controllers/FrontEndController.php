<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class FrontEndController extends Controller
{
    public function page( Request $request, $slug )
    {
        $page = Page::whereSlug($slug)
                    ->first();

        return view('pages.page', compact('page'));

    }

    public function home()
    {
        return view('pages.home');
    }
}
