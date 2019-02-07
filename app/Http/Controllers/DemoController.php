<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function search()
    {
        return view('demo.search');
    }

    public function searchResults(Request $request)
    {
        $results = Location::search($request->get('search'))->get();
        return view('demo.search')->with(['results' => $results]);
    }

    public function geo()
    {
        return view('demo.geo');
    }

    public function geoResults(Request $request)
    {
        $results = Location::search($request->get('search'))
            ->aroundLatLng($request->get('latitude'), $request->get('longitude'))
            ->with([
                'aroundRadius' => $request->get('radius')
            ])
            ->get();

        return view('demo.geo')->with(['results' => $results]);
    }
}
