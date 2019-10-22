<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gor;
use App\Cart;
use App\Http\Resources\GorCollection;
use App\Http\Resources\GorResource;
use Illuminate\Support\Facades\Auth; 

class AllGorController extends Controller
{
    public function index($param = null)
    {
    	$gor = Gor::where('nama', 'like', "%$param%")->has('lapangans')->get();
    	return new GorCollection($gor->load(['ratings','lapangans']));
    }

	public function getGor($id)
	{
		return new GorCollection(Gor::find($id)->load(['ratings','lapangans']));
	}

	public function pesan(Request $req, $id)
	{
		$cart = new Cart();
		$cart->status = 'belum';
		$cart->user_id = 31;
		$cart->durasi = $req->durasi;
		$cart->tanggal_main = $req->tanggal_main;
		$cart->lapangan_id = $id;
		$cart->save();
		return response()->json(['success' => true], 201);
	}

}
