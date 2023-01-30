<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Utils;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index(){
        $data = Banner::where('status', '!=', 'deleted')->orderByDesc('id')->get();

        return view('admin.banners.index', compact('data'));
    }

    public function create(){
        return view('admin.banners.create');
    }

    public function submit(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        // if($request->hasFile('image')){
            // $img = Utils::save_image_file($request->image, 'banner');
        // } else {
        //     $img = null;
        // }
        $name_image = "null.jpg";
        if($request->image){
            $img = Image::make($request->file("image"));
            $img->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $name_image = "banner_".time().".jpg";
            Storage::put("public/image/banner/$name_image", $img->encode());
        }

        $banner = Banner::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $name_image,
            'created_at' => Utils::now(),
            'updated_at' => Utils::now(),
        ]);

        if($banner) {
            return redirect()->route('banners')
                    ->with('success', 'Banner Berhasil Ditambah');
        }
    }

    public function edit($id){
        $banner = Banner::findOrFail($id);
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request){
        $banner = Banner::findOrFail($request->id);

        if($request->hasFile('image')){
            $img = Utils::save_image_file($request->image, 'banner');
        } else {
            $img = $banner->image;
        }

        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->status = $request->status;
        $banner->image = $img;
        $banner->updated_at = Utils::now();

        if($banner->save()) {
            return redirect()->route('banners')
                    ->with('success', 'Banner Berhasil Diubah');
        }
    }
}
