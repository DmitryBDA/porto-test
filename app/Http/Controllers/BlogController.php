<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        $a = 3;

        $b = $a;

        $c = $a + $b;

        $d = 33;

        $er = 3434;

        return 'blog';
    }
}
