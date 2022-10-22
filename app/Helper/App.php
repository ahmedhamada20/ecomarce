<?php

use App\Models\Photo;
use App\Models\Setting;
use Illuminate\Http\Request;

if (!function_exists('getphotosProduct')) {
    function getphotosProduct($id)
    {
        $photos = Photo::where('photoable_type', 'App\Models\Product')->where('photoable_id', $id)->get();
        return $photos;
    }
}
if (!function_exists('getnameSite')) {
    function getnameSite($name)
    {
        $result = Setting::first()->$name;
        if (!empty($result)) {
            return $result;
        }
    }
}
if (!function_exists('getphotoSite')) {
    function getphotoSite()
    {
        $result = Setting::first();
        if (!empty($result)) {
            return $result;
        }
    }
}
