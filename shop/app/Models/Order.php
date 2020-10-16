<?php
namespace App\Models;





class Order
{
    
    public function insertCart($idProduct,$idUser,$quantity){
        return \DB::table('cart_item')->insert([
            'IdCartItem' => NULL,
            'idProduct'=>$idProduct,
            'quantity' =>$quantity,
            'idUser' => $idUser
        ]);
    }

}