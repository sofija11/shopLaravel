<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


class Shop
{
    
    public function getAllProductsWithCategory($id){
        return DB::table('product')
        ->where([
            ['idCat', '=', $id]
            ])
        ->paginate(6);
    }
    
}