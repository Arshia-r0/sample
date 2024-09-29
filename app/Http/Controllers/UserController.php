<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(): View|Factory|Application
    {
        return view('main', [
            'users' => User::all()
        ]);
    }

    public function show(User $user)
    {
        return view('show', [
            'user' => $user,
        ]);
    }

}
