<?php
namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Str;


class Utils {
    public static function now(){
        $now = Carbon::now();
        return $now;
    }

    public static function save_image_file($filename, $folder){
        $file = '';
        $extention = $filename->extension();
        $file_name = Str::random(8) . time() . '.' . $extention;
        $txt = "storage/image/" . $folder . "/" . $file_name;
        $filename->storeAs('public/image/'.$folder.'/' , $file_name);
        $file = $txt;
        
        return $file;
    }
}