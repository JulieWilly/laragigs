<?php

namespace App\Http\Controllers;

use App\Models\Listings; 

class ListingsController extends Controller
{
    public function index()
    {
        return view('listing.index', [
            'listings' => Listings::latest()->filter(request((['tags', 'search'])))->get()
        ]);
    }

    // show single listings
    public function show(Listings $listing)
    {
        return view('listing.show', [
            'listing' => $listing
        ]);
    }
}
