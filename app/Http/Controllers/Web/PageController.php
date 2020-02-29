<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Order;
use Validator;
use App\Query;
use App\Page;

class PageController extends Controller
{
    //

    // public function contactStore()
    // { }
    public function contact()
    {
        return view('web.pages.contact-us');
    }

    public function help()
    {
        return view('web.pages.help-and-faqs');
    }




    public function thankyou()
    {
        return view('web.pages.thankyou');
    }

    public function term()
    {
        $page = Page::where('id', 1)->first();
        return view('web.pages.term', ['page' => $page]);
    }

    public function privacy()
    {
        $page = Page::where('id', 1)->first();
        return view('web.pages.privacy', ['page' => $page]);
    }

    public function about()
    {
        $page = Page::where('id', 1)->first();
        return view('web.pages.about', ['page' => $page]);
    }

}
