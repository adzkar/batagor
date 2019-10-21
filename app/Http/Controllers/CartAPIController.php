<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Resources\CartCollection;
use App\Http\Resources\CartResource;
 
class CartAPIController extends Controller
{
    public function index()
    {
        return new CartCollection(Cart::paginate());
    }
 
    public function show(Cart $cart)
    {
        return new CartResource($cart->load(['user', 'lapangan']));
    }

    public function store(Request $request)
    {
        return new CartResource(Cart::create($request->all()));
    }

    public function update(Request $request, Cart $cart)
    {
        $cart->update($request->all());

        return new CartResource($cart);
    }

    public function destroy(Request $request, Cart $cart)
    {
        $cart->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
