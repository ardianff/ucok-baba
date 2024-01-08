<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.guest.home.index');
    }
    public function getMaps(Request $request)
    {
        $url = 'http://119.2.50.170:9095/gismap/home/getData?jenis=' . $request->jenis . '&value=' . $request->value;
        $ambil = file_get_contents($url);
        $hasil = json_decode($ambil, true);

        return response()->json($hasil);
    }
}
