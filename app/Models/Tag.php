<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public static $rules__create = [
        "name" => "required | unique:tags"
    ];

    public static $messages__create = [
        "name.required" => "El nombre es obligatorio",
        "name.unique" => "Ya existe un tag con dicho nombre"
    ];

    public static $rules__edit = [
        "name" => "required"
    ];

    public static $messages__edit = [
        "name.required" => "El nombre es obligatorio"
    ];
}
