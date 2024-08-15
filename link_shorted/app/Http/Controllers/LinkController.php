<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Models\Url;
use App\Services\UrlShortenerService;

class LinkController extends Controller
{    
    public function index()
    {
        $link = Link::all();
        return view("link.index",compact("link"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return "";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return "";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return "";
    }
}
