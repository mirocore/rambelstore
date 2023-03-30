<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        // LISTADO DE CATEGORIAS
        $categories = Category::latest()->paginate(6);

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
        // VALIDATION
        $request->validate(Category::$rules__create, Category::$message__create);

        // CREAR REGISTRO
        $newCategory = Category::create($request->input());

        // VOLVER AL LISTADO
        return redirect()->route("category.index")->with('message', [
            "estilo" => "Success",
            "text"   => "Categoría creada"
        ]);
    }

    public function edit(Category $category){

        // RENDERIZAR
        return Inertia::render('Admin/Categories/formEdit', [
            "category" => $category
        ]);
    }

    public function update(Request $request, Category $category){
        // VALIDATION
        $request->validate( Category::$rules__edit, Category::$message__edit );

        // EDITAR REGISTRO
        $category->update($request->input());

        // VOLVER AL LISTADO
        return redirect()->route("category.index")->with('message', [
            "estilo" => "Success",
            "text"   => "Categoría editada"
        ]);
    }

    public function destroy(Category $category){
        // TODO VALIDATION

        // BORRO REGISTRO
        $category->delete();

        // REDIRIGIR
        return redirect()->route("category.index")->with('message', [
            "estilo" => "Success",
            "text"   => "Categoría eliminada"
        ]);
    }
}
