<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessoresController extends Controller
{
    public function index() {
        return view('professores.index');
    }

    public function create() {
        return view('professores.create');
    }
}
