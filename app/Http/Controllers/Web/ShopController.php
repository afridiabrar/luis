<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Cart;
use App\Address;
use App\Product;

class ShopController extends Controller
{
    //

    public function index()
    {
        $product = Product::orderBy('id', 'DESC')->where('is_deleted', 0)->with('categories')->with('productImages')->paginate(8);
        return view('web.pages.shop', ['product' => $product]);
    }



    public function search(Request $request)
    {
        $product = '';
        if (!empty($request->sortby)) {
            $sort = $request->sortby;
            if ($sort == 'A-Z') {
                $product = Product::orderBy('name', 'ASC')->where('is_deleted', 0)->with('categories')->with('productImages')->paginate(6);
            } elseif ($sort == 'Z-A') {
                $product = Product::orderBy('name', 'DESC')->where('is_deleted', 0)->with('categories')->with('productImages')->paginate(6);
            } elseif ($sort == 'price') {
                $product = Product::orderBy('price', 'ASC')->where('is_deleted', 0)->with('categories')->with('productImages')->paginate(6);
            } elseif ($sort == 'main_search') {
                if (!empty($request->search) && $request->search_category != 0) {
                    $product = Product::where('name', 'LIKE', '%' . $request->search . '%')->where('is_deleted', 0)->where('slug', $request->search_category)->with('categories')->with('productImages')->paginate(6);
                } elseif (!empty($request->search) && $request->search_category == 0) {
                    $product = Product::where('name', 'LIKE', '%' . $request->search . '%')->where('is_deleted', 0)->with('categories')->with('productImages')->paginate(6);
                } else {
                    session()->flash('error', 'No Result Found!');
                    return redirect()->back();
                }
            }
            if (!empty($product)) {
                return view('web.pages.shop', ['product' => $product]);
            } else {

                session()->flash('error', 'No Result Found!');
                return redirect()->back();
            }
        }
    }
}
