<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class artikelcontroller extends Controller
{
    public function index(){
        
        $listArtikel=Artikel::all(); 
        return view('artikel.index' ,compact('listArtikel'));
        
    }

    public function show($id){
        $Artikel=Artikel::find($id);
        return view('artikel.show' ,compact('Artikel'));
    }

    public function create(){
        return view('artikel.create');
    }

    public function store(Request $request){
        $input= $request->all();
        Artikel::create($input);

        return redirect(route('artikel.index'));
    }
}
