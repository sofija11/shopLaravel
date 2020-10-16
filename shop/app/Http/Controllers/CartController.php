<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    private $model;

    function __construct()
    {
        $this->model = new Product();
    }
    public function getProductsForCart(Request $r){
        $idProduct = $r->input('idProizvod');
        try {
            $products = $this->model->getCartProducts($idProduct);
            return response($products, 200);
        }
        catch(\PDOException $ex) {
            return response($ex->getMessage(), 500);
            \Log::error($ex->getMessage());
        }
    }
}
