<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('/pointakses/admin/index');
    }
}
