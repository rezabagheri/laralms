<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function page( Request $request )
    {
        $page_title = "New Page";

        switch($request->path()) {
            case 'home':
                return view('pages.home');
            break;
            case 'about':
                return view('pages.about');
            break;
            case 'contact':
                 return view('pages.contact');
            break;
        }


    }
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
