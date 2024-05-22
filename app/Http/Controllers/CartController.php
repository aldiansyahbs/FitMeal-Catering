<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
{
    $request->validate([
        'id_menu' => 'required|exists:menu,id_menu',
        'kuantitas' => 'required|integer|min:1',
    ]);

    try {
        $menu = Menu::findOrFail($request->id_menu);
        $totalPrice = $menu->harga * $request->kuantitas;

        $cartItem = Cart::where('id_user', Auth::id())
                        ->where('id_menu', $request->id_menu)
                        ->first();

        if ($cartItem) {
            $cartItem->kuantitas += $request->kuantitas;
            $cartItem->total_harga = $cartItem->kuantitas * $menu->harga;
            $cartItem->save();
        } else {
            $cartItem = Cart::create([
                'id_user' => Auth::id(),
                'id_menu' => $request->id_menu,
                'kuantitas' => $request->kuantitas,
                'total_harga' => $totalPrice,
            ]);
        }

        return response()->json(['success' => true, 'message' => 'Item added to cart successfully!', 'cart' => $cartItem]);
    } catch (\Exception $e) {
        \Log::error('Error adding to cart: '.$e->getMessage());
        return response()->json(['success' => false, 'message' => 'Error adding item to cart.'], 500);
    }
}

    public function showCart()
    {
    $cartItems = Cart::where('id_user', Auth::id())->with('menu')->get();
    return view('cart', compact('cartItems'));
    }
}