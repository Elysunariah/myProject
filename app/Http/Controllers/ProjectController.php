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
    public function about()
    {
        return view('about');
    }
    public function create()
    {
        return view('create');
    }
    public function library()
    {
        return view('library');
    }
    public function book()
    {
        return view('buku');
    }

}
