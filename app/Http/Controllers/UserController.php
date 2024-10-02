<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class UserController extends Controller
{

    public function index(): View|Factory|Application
    {
        return view('main', [
            'users' => User::all()
        ]);
    }

    public function show(User $user): View|Factory|Application
    {
        return view('show', [
            'user' => $user,
        ]);
    }
}
