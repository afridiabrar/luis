<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Cart;

class CartController extends Controller
{
    //
    public function cart()
    {
        $getCart = Cart::getContent();
        $total = $getCart->count();
        $getTotal = Cart::getTotal();
        return view('web.pages.cart', ['cart' => $getCart, 'totalCartCount' => $total, 'getTotal' => $getTotal]);
    }

    public function store(Request $request)
    {
        $product = Product::find($request->p_id);
        if (empty($product)) {
            session()->flash('error', 'Data Not Found!');
            return \redirect(route('category'));
        }
        if ($request->qty > 0 &&   $request->qty <= $product->in_stock) {
            $cartdata = Cart::get($request->p_id);
            $qty = (!empty($cartdata) && $cartdata->quantity) ? $cartdata->quantity + $request->qty : 1 * $request->qty;
            //$qty = $cartdata->quantity + $request->qty;
            $cart =  Cart::add(array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $request->qty,
                'attributes' => array(
                    'image' => $product->featured_image,
                    'p_total' => $qty * $product->price
                )
            ));
            if ($cart) {
                session()->flash('success', 'Your Cart Has Been Updated');
                return redirect()->back();
            } else {
                session()->flash('error', 'Error Occured Please Try Again Letter');
                return redirect()->back();
            }
        } else {
            session()->flash('error', 'Stock Quantity Must Be less Then Stock Or equal to In Stock');
            return redirect()->back();
        }
    }


}
