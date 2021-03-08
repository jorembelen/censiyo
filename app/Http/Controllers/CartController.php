<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {
        // return $product;
        // add cart items to a specific user
        $userId = auth()->user()->id; // or any string represents user identifier
        \Cart::session($userId)->add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');
    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->user()->id)->getContent();
       return view('cart.index', compact('cartItems'));
    }

    public function update($rowId)
    {
        \Cart::session(auth()->user()->id)->update($rowId, [
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity'),
            )
        ]);
       return back();
    }

    public function destroy($itemId)
    {
        \Cart::session(auth()->user()->id)->remove($itemId);
       return back();
    }

    public function checkOut()
    {
        // \Cart::session(auth()->user()->id)->remove($itemId);
       return view('cart.checkout');
    }
}
