<?php

namespace App\Http\Controllers;

use App\Images;
use App\Http\Resources\ImagesCollection;
use App\Http\Resources\ImagesResource;
 
class ImagesAPIController extends Controller
{
    public function index()
    {
        return new ImagesCollection(Images::paginate());
    }
 
    public function show(Images $images)
    {
        return new ImagesResource($images->load(['gor', 'lapangan']));
    }

    public function store(Request $request)
    {
        return new ImagesResource(Images::create($request->all()));
    }

    public function update(Request $request, Images $images)
    {
        $images->update($request->all());

        return new ImagesResource($images);
    }

    public function destroy(Request $request, Images $images)
    {
        $images->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
