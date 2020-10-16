<?php

namespace App\Models;





class Meni
{
    
    public function getAllNavs(){
        return \DB::table('navigation')->get();
    }

}