<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller{
    
    public function index(){
        return view('index',
        ['title' => 'Index - Simple Crud Laravel',
         'style' => 'css/index.css'
        ]
    );
    }
}
