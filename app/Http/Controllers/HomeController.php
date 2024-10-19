<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function cv(){
        $filePath = public_path('CV/Mehul Panchasara (Laravel Developer).pdf');
        return response()->download($filePath);
    }
}
