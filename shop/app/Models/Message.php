<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\InsertMessageRequest;

class Message
{
    
    public function insertM($caption,$message){
        return DB::table('message')
            ->insert([
                "idMessage"=> NULL,
                "caption" => $caption,
                "message" => $message,
                "idUser" => 3
            ]);
    }
    public function getAllMessagesWithUserAndRoles(){
        return DB::table('message AS m')
            ->join('user AS u','m.idUser','=','u.idUser')
            ->join('role AS r','r.idRole','=','u.idRole')
            ->select('u.firstname','u.lastname','u.email','m.message','r.role')
            ->get();
    }
    
}