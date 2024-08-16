<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use Illuminate\Support\Str;

class LinkController extends Controller
{    
    public function index()
    {
        $link = Link::all();
       // dd($link);
        return view("link.index",compact("link"));
    }

    public function show(){
        $link = collect(Link::all());
        return json_encode($link);
    }    
    
    public function create(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);
        $shortCode = Str::random(8);        
        // Asegurarse de que el shortCode sea único
        while (Link::where('new_url', $shortCode)->exists()) {
            $shortCode = Str::random(8);
        }
        if (Link::created([
            "url"=>$request->url,
            "new_url"=>$shortCode
        ])) {
            return response()->json(["new_url"=>$shortCode]);
        } else {
            return response()->json(["error"=>"No se pudo crear el link"]);
        }        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return "";
    }

  
    public function update(Request $request)
    {
        //dd($request->all());
        $link = Link::find($request->id);        
        return $link->save($request->all());
    }

    
    public function destroy(string $id)
    {
        $link = Link::find($id);
        return $link->delete();        
    }
}
