<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules;

class KehadiranController extends Controller
{
    public function index()
    {
        return view('pages.admin.kehadiran.index');
    }

}