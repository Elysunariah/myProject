<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
class ProjectController extends Controller
{
    public function index()
    {
        return view ('beranda');

    }

}
