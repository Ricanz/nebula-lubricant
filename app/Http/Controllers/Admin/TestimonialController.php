<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Utils;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        $data = Testimonial::where('status', '!=', 'deleted')->orderBy('id')->get();
        return view('admin.testimonials.index', compact('data'));
    }

    public function create(){
        return view('admin.testimonials.create');
    }

    public function submit(Request $request){
        $request->validate([
            'name' => 'required',
            'testimoni' => 'required',
        ]);
        if($request->hasFile('image')){
            $img = Utils::save_image_file($request->image, 'testimonial');
        } else {
            $img = null;
        }

        $testimonial = Testimonial::create([
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->testimoni,
            'status' => $request->status,
            'image' => $img,
            'created_at' => Utils::now(),
            'updated_at' => Utils::now(),
        ]);

        if($testimonial){
            return redirect()->route('testimonials')
                    ->with('success', 'Testimonial Berhasil Ditambah');
        }
    }

    public function edit($id){
        $testimoni = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimoni'));
    }

    public function update(Request $request){
        $testimoni = Testimonial::findOrFail($request->id);
        if($testimoni){
            if($request->hasFile('image')){
                $img = Utils::save_image_file($request->image, 'testimonial');
            } else {
                $img = $testimoni->image;
            }

            $testimoni->name = $request->name;
            $testimoni->position = $request->position;
            $testimoni->description = $request->testimoni;
            $testimoni->status = $request->status;
            $testimoni->image = $img;
            $testimoni->updated_at = Utils::now();
            if($testimoni->save()){
                return redirect()->route('testimonials')
                    ->with('success', 'Testimonial Berhasil Diubah');
            }
        }
    }
}
