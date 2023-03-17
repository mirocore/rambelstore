<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index(){

        // LISTADO DE CATEGORIAS
        $categories = Category::latest()->get();

        // RENDERIZAR
        return Inertia::render('Admin/Categories/index', [
            'categories' => $categories
        ]);
    }

    public function create(){

        // RENDERIZAR
        return Inertia::render('Admin/Categories/formNew');
    }

    public function store(Request $request){
        // TODO VALIDATION

        // CREAR REGISTRO
        $newCategory = Category::create($request->input());

        // VOLVER AL LISTADO
        return redirect()->route("category.index");
    }

    public function edit(Category $category){

        // RENDERIZAR
        return Inertia::render('Admin/Categories/formEdit', [
            "category" => $category
        ]);
    }

    public function update(Request $request, Category $category){
        // TODO VALIDATION

        // EDITAR REGISTRO
        $category->update($request->input());

        // VOLVER AL LISTADO
        return redirect()->route("category.index");
    }

    public function destroy(Category $category){
        // TODO VALIDATION

        // BORRO REGISTRO
        $category->delete();

        // REDIRIGIR
        return redirect()->route("category.index");
    }
}
