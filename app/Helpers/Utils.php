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


    public static function slugify($text, $divider = '-'){
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, $divider);
        $text = preg_replace('~-+~', $divider, $text);
        $text = strtolower($text);
        if (empty($text)) {
            return false;
        }
        return $text;
    }

    public static function limit_text($text, $limit){
        $short = Str::limit($text, $limit, '...');
        return $short;
    }
    
}