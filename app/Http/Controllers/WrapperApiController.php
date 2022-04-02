<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function details()
    {
        $json = Http::get( 'https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJN1t_tDeuEmsRUsoyG83frY4/')->json();
        return response()->json($json);
    }
    public function findplacefromtext()
    {
        $json = Http::get( 'https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=Kawalu Tasikmalaya&inputtype=textquery&locationbias=ipbias&language=en&key=AIzaSyDJFWnastJ4D5Dbyztt6l4jiJqh0xpKBXI/')->json();
        return response()->json($json);
    }
    public function nearbysearch()
    {
        $json = Http::get( 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=/')->json();
        return response()->json($json);
    }
    public function textsearch()
    {
        $json = Http::get( 'https://maps.googleapis.com/maps/api/place/textsearch/json?query=/')->json();
        return response()->json($json);
    }
    public function photo()
    {
        $json = Http::get( 'https://maps.googleapis.com/maps/api/place/photo?photo_reference=/')->json();
        return response()->json($json);
    }
}
