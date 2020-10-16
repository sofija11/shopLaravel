<?php

namespace App\Http\Controllers;

use App\Models\Meni;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    protected $modelProduct;

    function __construct()
    {
       $this->modelProduct = new Product();
        
    }
    public function showShop(){

        $products=$this->modelProduct->getAllProductsWithPagination();
        $colors=$this->modelProduct->getColours();
        $categories=$this->modelProduct->getCategories();
       
        return view("pages.shop", ['products'=>$products,'colors'=>$colors, 'categories'=>$categories]);

       
        
        
    }
    public function showOneProduct($id){
        $one_product=$this->modelProduct->getOneProduct($id);
       // dd($one_product);
        return view('pages.single_product',['product'=>$one_product]);
    }
    public function search(Request $reguest){
        $colors=$this->modelProduct->getColours();
        $categories=$this->modelProduct->getCategories();
        $products=$this->modelProduct->getAllProductsWithPagination();
        $uneto= $reguest->input('search');
      // dd($uneto);
        $novi=$this->modelProduct->search($uneto);//upit
       // dd($novi);
       

        return view("pages.shop", ['products'=>$novi
        ,'colors'=>$colors, 'categories'=>$categories]);
    }
    public function cartShow(){
        return view("pages.cart");
    }

    
}
