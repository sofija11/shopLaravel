<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\InsertUserRequest;
use App\Http\Requests\Admin\AddUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;

class User
{
    
    public function insertUser($firstname,$lastname,$username,$email,$password){
        return DB::table('user')
            ->insert([
                "idUser"=> NULL,
                "firstname" => $firstname,
                "lastname" => $lastname,
                "username" => $username,
                "email" => $email,
                "password" => md5($password),
                "idRole" => 2
               

            ]);
    }
    public function loginUser($usernameL,$passwordL){
        return DB::table('user')
        ->where([
           ["username","=",$usernameL],
           ["password","=",md5($passwordL)]
        ])->first();
    }
    public function getAllUsers(){
        return DB::table('user')
        ->join('role','role.idRole','=','user.idRole')
        ->get();
    }
    public function getRoles(){
        return DB::table('role')
        ->get();
    }
    public function deleteUser($id){
        return DB::table('user')->where([
            ['idUser', '=', $id]
            ])
            ->delete();

    }
    public function insertUserAdmin($firstnameAdmin,$lastnameAdmin,$usernameAdmin,$role,$emailAdmin,$passwordAdmin){
        return DB::table('user')
        ->insert([
            "idUser"=> NULL,
            "firstname" => $firstnameAdmin,
            "lastname" => $lastnameAdmin,
            "username" => $usernameAdmin,
            "email" => $emailAdmin,
            "password" => md5($passwordAdmin),
            "idRole" => $role,
           
           

        ]);
    }
    public function getOneUser($id){
        return DB::table('user AS u')
        ->join("role AS r","u.idRole","=","r.idRole")
        ->select(
            "u.idUser",
            "u.firstname",
            "u.lastname",
            "r.role",
            "r.idRole",
            "u.username",
            "u.email"
        )
        ->where([
            "u.idUser" => $id
        ])
        ->first();
    }
    public function updateUser($idUser,$firstname,$lastname,$idRole,$username,$email,$password){
        return DB::table('user')
        ->where([
            "idUser"=>$idUser
        ])
        ->update([
            "firstname" =>$firstname,
            "lastname" =>$lastname,
            "idRole" =>$idRole,
            "username" =>$username,
            "email" =>$email,
            "password"=>md5($password)
        ]);
    }
   
}