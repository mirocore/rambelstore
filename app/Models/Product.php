<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

protected $fillable = ["name", "description", "price", "promo", "state", "important", "id_category"];

    


    /* VALIDACION */

    public static $rules__create = [
        "name"          => "required | min:4 | unique:products",
        "price"         => "required | numeric" ,
        "id_category"   => "required",
    ];

    public static $messages_create = [
        "name.required" => "El nombre es obligatorio",
        "name.min" => "El mínimo de caracteres es de 4",
        "name.unique" => "Ya existe un producto con dicho nombre",
        "price.required" => "El campo precio es obligatorio",
        "price.numeric" => "El campo precio debe ser un número",
        "id_category.required" => "Seleccione una categoría",
        "id_category.exist" => "Categoría inexistente",
    ];

    public static $rules__edit = [
        "name"          => "required | min:4",
        "price"         => "required | numeric" ,
        "id_category"   => "required",
    ];

    public static $messages_edit = [
        "name.required" => "El nombre es obligatorio",
        "name.min" => "El mínimo de caracteres es de 4",
        "price.required" => "El campo precio es obligatorio",
        "price.numeric" => "El campo precio debe ser un número",
        "id_category.required" => "Seleccione una categoría",
    ];


    /* METODOS */
    public function category()
    {
        return $this->hasOne(Category::class, "id", "id_category");
    }

}
