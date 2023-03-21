<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TagController extends Controller
{
    public function index(){

        // BUSCO TODOS LOS REGISTROS
        $tags = Tag::latest()->get();

        // RENDERIZO LA VISTA
        return Inertia::render('Admin/Tags/Index', [
            "tags" => $tags
        ]);

    }

    public function create(){
       
        // RENDERIZO LA VISTA
        return Inertia::render('Admin/Tags/FormNew');
    }

    public function store(Request $request){
        
        // VALIDATION
        $request->validate(Tag::$rules__create, Tag::$messages__create);

        // INGRESAR REGISTRO
        $newTag = Tag::create($request->input());

        // VUELVO AL LISTADO
        return redirect()->route('tags.index');
    }

    public function edit(Tag $tag){
        return Inertia::render('Admin/Tags/FormEdit', [
            "tag" => $tag
        ]);
    }

    public function update(Tag $tag, Request $request){
        // VALIDATION
        $request->validate(Tag::$rules__edit, Tag::$messages__edit);

        // EDITAR REGISTRO
        $tag->update($request->input());

        // VUELVO AL LISTADO
        return redirect()->route('tags.index');
    }

    public function destroy(Tag $tag){
        // TODO VALIDATION 

        // ELIMINAR REGISTRO
        $tag->delete();

        // VUELVO AL LISTADO
        return redirect()->route('tags.index');
    }
}
