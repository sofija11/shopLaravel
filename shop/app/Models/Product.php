<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


class Product
{
    
    public function getAllProducts(){
        return DB::table('product')
        ->where([
            ['status', '=', 1]
            ])
        ->get();
    }
    public function getAllProductsWithPagination(){
        return DB::table('product')
        ->where([
            ['status', '=', 1]
            ])
        ->paginate(6);
    }
    public function getCategories(){
        return DB::table('category')
        ->get();
    }public function getColours(){
        return DB::table('color')
        ->get();
    }
    public function deleteProduct($id){
        return DB::table('product')->where([
            ['idProduct', '=', $id]
            ])
            ->update([
                "status" => 0,
                "deleted_at" => date("Y-m-d H-i-s",time())
            ]);;
    }
    public function insertPhotoAdmin($productAdmin,$priceAdmin,$fileNameNew,$categoryAdmin,$colorAdmin){
        return DB::table('product')
        ->insert([
            "idProduct"=> NULL,
            "name" => $productAdmin,
            "price" => $priceAdmin,
            "image" => $fileNameNew,
            "idCat" => $categoryAdmin,
            "idColor" =>$colorAdmin
        ]);
    }
    public function getOneProduct($id){
        return DB::table('product AS p')
        ->join("category AS c","c.idCategory","=","p.idCat")
        ->join("color AS col","p.idColor",'=',"col.idColor")
        ->select(
            "p.idProduct",
            "p.name",
            "p.price",
            "p.image",
            "p.idCat",
            "p.idColor",
            "col.idColor",
            "col.color",
            "c.idCategory",
            "c.name AS catname"
        )
        ->where([
           "p.idProduct" => $id
          
        ])
        ->first();
    }

    public function getAllProductsAdmin(){
        return DB::table('product')
        ->where([
            ['status', '=', 1]
            ])
        ->paginate(6);
    }
    public function updatePhotoAdminUpdate($id,$productAdminUpdate,$priceAdminUpdate,$fileNameNew,$categoryAdminUpdate,$colorAdminUpdate){
        return DB::table('product')
        ->where([
            "idProduct"=>$id
        ])
        ->update([
            "name" =>$productAdminUpdate,
            "price" =>$priceAdminUpdate,
            "image" =>$fileNameNew,
            "idCat" =>$categoryAdminUpdate,
            "idColor" =>$colorAdminUpdate,
            "updated_at"=> date("Y-m-d H-i-s",time())
        ]);
    }
    public function search($uneto){
        return DB::table('product')
                ->where('name', 'like','%'.$uneto.'%')
                ->paginate(1);

    }
    public function getAllProductsWithCategory($id){
        return DB::table('product')
            ->where([
                'idCat','=',$id
            ]);
    }
    public function getProductsPaginate($idCat,$search){

        $query = DB::table('product AS p');

        if($idCat != 0) {

            $query = $query->join('category AS c', 'p.idCat', '=', 'c.idCategory')->select('p.*','c.name as categoryName')
            ->where([
                
                'p.idCat' => $idCat,
                'status' => 1
            ]);
        }

        if($search != "") {
            $query = $query->where('p.name', 'like', '%'.$search.'%');
        }
        
        return $query->paginate(3);
    }
    public function getCartProducts($idProduct) {
        return \DB::table('product')->whereIn('idProduct', $idProduct)->get();
    }
}