<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
        $products = Product::with("category")->latest()->paginate(6);

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
        // VALIDATION
        $request->validate( Product::$rules__create, Product::$messages_create );

        // INSERTAR REGISTRO
        $newProduct = Product::create( $request->input() );

        // VOLVER AL LISTADO
        return redirect()->route("product.index")->with('message', [
            "estilo" => "Success",
            "text"   => "Producto creado"
        ]);
    }

    public function edit(Product $product){
        // TODAS LAS CATEGORIAS
        $categories = Category::all();

        // RENDERIZAR VISTA
        return Inertia::render( "Admin/Products/FormEdit", [
            "categories" => $categories,
            "product" => $product
        ] );
    }

    public function update(Product $product, Request $request){

        // VALIDATION
        $request->validate( Product::$rules__edit, Product::$messages_edit );

        // EDITAR REGISTRO
        $product->update( $request->input() );

        // VOLVER AL LISTADO
        return redirect()->route("product.index")->with('message', [
            "estilo" => "Success",
            "text"   => "Producto Editado"
        ]);
    }

    public function destroy(Product $product){
        // TODO VALIDATION

        // ELIMINAR REGISTRO
        $product->delete();

        // VOLVER
        return redirect()->route("product.index")->with('message', [
            "estilo" => "Success",
            "text"   => "Producto eliminado"
        ]);
    }

    
}
