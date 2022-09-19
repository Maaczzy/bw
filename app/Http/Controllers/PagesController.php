<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Laravel!";
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = "About";
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Desing', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
