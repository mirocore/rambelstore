<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public static $rules__create = [
        "name" => "required | unique:categories"
    ];

    public static $message__create = [
        "name.required" => "El campo nombre es obligatorio",
        "name.unique" => "Ya existe una categoría con dicho nombre"
    ];

    public static $rules__edit = [
        "name" => "required"
    ];

    public static $message__edit = [
        "name.required" => "El campo nombre es obligatorio",
    ];
}
