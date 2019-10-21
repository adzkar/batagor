<?php

namespace App\Http\Controllers;

use App\Detail_cart;
use App\Http\Resources\Detail_cartCollection;
use App\Http\Resources\Detail_cartResource;
 
class Detail_cartAPIController extends Controller
{
    public function index()
    {
        return new Detail_cartCollection(Detail_cart::paginate());
    }
 
    public function show(Detail_cart $detailCart)
    {
        return new Detail_cartResource($detailCart->load(['user']));
    }

    public function store(Request $request)
    {
        return new Detail_cartResource(Detail_cart::create($request->all()));
    }

    public function update(Request $request, Detail_cart $detailCart)
    {
        $detailCart->update($request->all());

        return new Detail_cartResource($detailCart);
    }

    public function destroy(Request $request, Detail_cart $detailCart)
    {
        $detailCart->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
