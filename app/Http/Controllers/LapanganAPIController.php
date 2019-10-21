<?php

namespace App\Http\Controllers;

use App\Lapangan;
use App\Http\Resources\LapanganCollection;
use App\Http\Resources\LapanganResource;
 
class LapanganAPIController extends Controller
{
    public function index()
    {
        return new LapanganCollection(Lapangan::paginate());
    }
 
    public function show(Lapangan $lapangan)
    {
        return new LapanganResource($lapangan->load(['carts', 'images', 'gor']));
    }

    public function store(Request $request)
    {
        return new LapanganResource(Lapangan::create($request->all()));
    }

    public function update(Request $request, Lapangan $lapangan)
    {
        $lapangan->update($request->all());

        return new LapanganResource($lapangan);
    }

    public function destroy(Request $request, Lapangan $lapangan)
    {
        $lapangan->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
