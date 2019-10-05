<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class kategorigalericontroller extends Controller
{
    public function index(){
        
        $listKategoriGaleri=KategoriGaleri::all(); 

        return view('kategori_galeri.index' ,compact('listKategoriGaleri'));
    }

    public function show($id){

        $KategoriGaleri=KategoriGaleri::find($id);

        return view('kategori_Galeri.show' ,compact('KategoriGaleri'));

    }

    public function create(){
        return view('kategori_galeri.create');
    }

    public function store(Request $request){
        $input= $request->all();
        KategoriGaleri::create($input);

        return redirect(route('kategori_galeri.index'));
    }
}
