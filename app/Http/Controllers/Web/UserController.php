<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use Hash;
use App\Address;
use App\BannerImage;
use App\Category;
use App\Country;
use App\Product;
use App\State;
use File;
use Image;

class UserController extends Controller
{
    //
    public function index()
    {
        $banner = BannerImage::where('status', 'Featured')->get();
        $category = Category::with('products')->where('status','Featured')->get();
        $product = Product::where('is_deleted', 0)->orderBy('id', 'DESC')->take(20)->get();
        return view('web.pages.index', ['banner' => $banner, 'category' => $category, 'product' => $product]);
    }

    public function account()
    {
        if (Auth::user()) {
            $user = Auth::user();
            $country = Country::get();
            return view('web.pages.my-account', ['user' => $user, 'country' => $country]);
        } else {
            session()->flash('error', 'Please Login First!');
            return \redirect(route('authentication'));
        }
    }
    }