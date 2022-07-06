<?php

namespace App\Http\Controllers;

use App\Models\Revista;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateRevista;

class RevistasController extends Controller
{
    public function index(){
        $revistas= Revista::all();
        return view('revistas.index', compact('revistas'));
    }

    public function create(){
        return view ('revistas.create');
    }

    public function store(StoreUpdateRevista $request){
        Revista::create($request->all());
        return redirect()->route('revistas.index');
    }

    public function show($id){
        $revista= Revista::find($id);
        if(!$revista){
            return redirect()
                    ->route('revistas.index')
                    ->with('message', 'A revista não foi encontrada!');
        }
        return view('revistas.show', compact('revista'));
    }

    public function destroy($id){
        $revista= Revista::find($id);
        if(!$revista){
            return redirect()
                    ->route('revistas.index')
                    ->with('message', 'A revista não foi encontrada!');
        }
        $revista->delete();
          return redirect()
                   ->route('revistas.index')
                   ->with('message', 'A revista foi deletada!');    
    }
}
