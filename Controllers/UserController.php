<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;

class UserController extends Controller

{
    public function calcView(Request $request)
    {
        return view('calc');
    }

    public function shopView(Request $request)
    {
        $xml = simplexml_load_file('flat.xml');

        foreach ($xml as $x) {
            $id = $x->id;
            $name = $x->name;
            $latitude = $x->latitude;
            $longitude = $x->longitude;
            $address = $x->address;

        }
        return view('shop', compact('id', 'name', 'latitude', 'longitude', 'address'));

    }

    public function calcPost(Request $request)
    {

    }

    public function shopPost(Request $request)
    {

    }
}


