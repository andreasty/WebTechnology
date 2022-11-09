<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    function index()
    {
        //memanggil view landing page pada folder frontpage
        //disertai dengan variable title yang dapat ditampilkan pada layout
        return view('frontpage.product', ['title' => "Product Page"]);
    }
}
