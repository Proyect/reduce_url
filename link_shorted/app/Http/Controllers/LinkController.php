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
        
        $find = strpos($request->url,"/",9);
        if ($find==0) {
           $page = $request->url +"/";
        } else {
           $page = substr($request->url, 0, $find+1);
        }
        
        $shortCode = Str::random(8);        
        // Asegurarse de que el shortCode sea único
        while (Link::where('new_url', $shortCode)->exists()) {
            $shortCode = Str::random(8);
        }
        $page = $page.$shortCode; 

        $link = Link::insert([
            "url"=>$request->url,
            "new_url"=> $page
        ]); 

        if ($link) {
            return response()->json(["new_url"=>$page.$shortCode]);
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
        $link->url = $request->url ;
        $link->new_url = $request->new_url; 
        $aux =  $link->save();   
        if($aux){
            $mje = "Actualizacion realizada correctamente";
        }else{
            $mje = "Error en la actualizacion de datos";
        }
        return response()->json(["mje"=>$mje]);
    }

    
    public function destroy(Request $request)
    {
        $link = Link::find($request->id);
        if ($link->delete()) {
            $je="Datos Eliminados correctamente";
        } else {
            $mje = "Error al eliminar los datos";
        }
        
        return response()->json(["mje"=>$mje]);       
    }

    public function redirect($code)
    {
        $url = Url::where('link', $code)->firstOrFail();

        return redirect($url->new_link);
    }
}
