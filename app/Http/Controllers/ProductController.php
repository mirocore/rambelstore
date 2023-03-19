<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(){
        
        $products = Product::with("category")->latest()->get();

        return Inertia::render("Admin/Products/Index", [
            "products" => $products
        ]);
    }

    public function create(){
        
        // TODAS LAS CATEGORIAS
        $categories = Category::all();

        // RENDERIZAR VISTA
        return Inertia::render( "Admin/Products/FormNew", [
            "categories" => $categories
        ] );

    }

    public function store(Request $request){
        // TODO VALIDATION
        
        // INSERTAR REGISTRO
        $newProduct = Product::create( $request->input() );

        // VOLVER AL LISTADO
        return redirect()->route("product.index");
    }

    
}
