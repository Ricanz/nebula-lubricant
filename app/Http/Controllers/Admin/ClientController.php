<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Utils;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $data = Client::where('status', '!=', 'deleted')->orderBy('id')->get();
        return view('admin.clients.index', compact('data'));
    }

    public function create(){
        return view('admin.clients.create');
    }

    public function submit(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $img = Utils::save_image_file($request->image, 'clients');
        } else {
            $img = null;
        }

        $client = Client::create([
            'title' => $request->title,
            'status' => $request->status,
            'image' => $img,
            'created_at' => Utils::now(),
            'updated_at' => Utils::now(),
        ]);

        if($client){
            return redirect()->route('client')
                    ->with('success', 'Klien Berhasil Ditambah');
        }
    }

    public function edit($id){
        $client = Client::findOrFail($id);
        return view('admin.clients.edit', compact('client'));
    }

    public function update(Request $request){
        $client = Client::findOrFail($request->id);

        if($client){
            if($request->hasFile('image')){
                $img = Utils::save_image_file($request->image, 'clients');
            } else {
                $img = $client->image;
            }
            
            $client->title = $request->title;
            $client->image = $img;
            $client->status = $request->status;
            $client->updated_at = Utils::now();
            if($client->save()){
                return redirect()->route('client')
                    ->with('success', 'Klien Berhasil Diubah');
            }
        }
    }
}
