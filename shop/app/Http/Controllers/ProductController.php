<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = new Product();
    }
    

}
