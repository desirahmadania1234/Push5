<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class pengumumancontroller extends Controller
{
    public function index(){
        
        $listPengumuman=Pengumuman::all(); 
        return view('pengumuman.index' ,compact('listPengumuman'));
        
    }

    public function show($id){
        $Pengumuman=Pengumuman::find($id);
        return view('pengumuman.show' ,compact('Pengumuman'));
    }

    public function create(){
        return view('pengumuman.create');
    }

    public function store(Request $request){
        $input= $request->all();
        Pengumuman::create($input);

        return redirect(route('pengumuman.index'));
    }
}
