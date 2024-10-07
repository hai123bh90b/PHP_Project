<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelationController extends Controller
{

    public function index()
    {
        return view('relation.index'); 
    }
}
