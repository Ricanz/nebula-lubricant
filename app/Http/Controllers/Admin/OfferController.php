<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(){
        $data = Offer::where('status', 'active')->orderBy('id')->get();
        return view('admin.offers.index', compact('data'));
    }

    public function edit($id){
        $offer = Offer::findOrFail($id);
        return view('admin.offers.edit', compact('offer'));
    }

    public function update(Request $request){
        $offer = Offer::findOrFail($request->id);

        if($offer){
            $offer->title = $request->title;
            $offer->description = $request->description;
            $offer->status = $request->status;

            if($offer->save()){
                return redirect()->route('offer')
                    ->with('success', 'Penawaran Berhasil Diubah');
            }
        }
    }
}
