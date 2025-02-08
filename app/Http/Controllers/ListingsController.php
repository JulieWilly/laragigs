<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Listings;


class ListingsController extends Controller
{
    public function index()
    {
        return view('listing.index', [
            'listings' => Listings::latest()->filter(request((['tags', 'search'])))->paginate()
        ]);
    }

    // show single listings
    public function show(Listings $listing)
    {
        return view('listing.show', [
            'listing' => $listing
        ]);
    }


    // show create form
    public function create() {
        return view ('listings.create');
    }

    // store users registration details. 
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        // create in the database
        Listings::create($formFields);

        return redirect('/'); 
    }
}
