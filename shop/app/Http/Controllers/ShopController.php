<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Product;

class ShopController extends Controller
{
    private $model;
    private $modelProduct;

    function __construct()
    {
        $this->modelProduct= new Product();
        $this->model = new Shop();
    }

    public function ProductsByCategory(Request $request,$id){
        $colors=$this->modelProduct->getColours();
        $categories=$this->modelProduct->getCategories();
        $products = $this->model->getAllProductsWithCategory($id);
       // dd($products);
      // return response($productss,200);
     // return redirect()->back();
      //return view("pages.shop",["products" => $products,'colors'=>$colors, 'categories'=>$categories]);
      return $products;
       
       

    }
    public function show(Request $request) {
        
       $idCat=$request->input('categoryLista');
       $search=$request->input('search');
         
        try {
            if($request->has('bttn')){

             $productiSearch=$this->modelProduct->getProductsPaginate($idCat,$search);
             $categories=$this->modelProduct->getCategories();

             
            $this->data['products'] =  $productiSearch;
            
            $this->data['categories'] = $categories;

            return view("pages.shop", $this->data);
            }
            
        }
        catch(\PDOException $ex) {
           
        }
     }
    // 
}
