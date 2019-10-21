<?php

namespace App\Http\Controllers;

use App\Gor;
use App\Http\Resources\GorCollection;
use App\Http\Resources\GorResource;
 
class GorAPIController extends Controller
{
    public function index()
    {
        return new GorCollection(Gor::paginate());
    }
 
    public function show(Gor $gor)
    {
        return new GorResource($gor->load(['ratings', 'lapangans', 'images']));
    }

    public function store(Request $request)
    {
        return new GorResource(Gor::create($request->all()));
    }

    public function update(Request $request, Gor $gor)
    {
        $gor->update($request->all());

        return new GorResource($gor);
    }

    public function destroy(Request $request, Gor $gor)
    {
        $gor->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
