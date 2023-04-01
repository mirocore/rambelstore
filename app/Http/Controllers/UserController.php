<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function showProfile(User $user){
        return Inertia::render("Admin/User/Profile", [
            "user" => $user
        ]);
    }
}
