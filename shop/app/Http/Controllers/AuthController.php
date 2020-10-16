<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertUserRequest;
use App\Http\Requests\LoginRequest;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\LogCatchs;

class AuthController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = new User();
    }
    public function registerUser(InsertUserRequest $reguest){

        if($reguest->has('sendRegistration'))   {
            $firstname= $reguest->input('firstname');
            $lastname= $reguest->input('lastname');
            $username= $reguest->input('username');
            $email= $reguest->input('email');
            $password= $reguest->input('password');
            $confirmPassword= $reguest->input('confirmPassword');
            
        try {
                $user = $this->model->insertUser($firstname,$lastname,$username,$email,$password);
                return redirect()->back()->with('message', 'Successful registration');
                return response(null, 201);
                Log::info('User: ' . $user->username. 'Action: Register');
           }
            catch(\Exception $ex) {
                return response(["greska" => $ex->getMessage()], 505);
                \Log::error($ex->getMessage());
               return redirect()->back()->with('message', 'Failed registration');
            }
                        }
                else {
            
                return redirect()->back()->with('message','Something went wrong');
            }

    }
    public function login(LoginRequest $request){
        if($request->has('sendL')){
            $usernameL = $request->input('usernameL');
            $passwordL= $request->input('passwordL');
           
            
                $userOne=$this->model-> loginUser($usernameL,$passwordL);
                if ($userOne){
                    if($userOne->idRole == 2){
                        $request->session()->put("user", $userOne);
                        return redirect()->route('home');
                    }
                    if($userOne->idRole == 1){
                        $request->session()->put("user", $userOne);
                        $request->session()->put("admin", $userOne);
                        return redirect()->route('users.index');
                    }
                    
                    Log::info('Logovanje');

            } else{
               
               return redirect()->back()->with('message', 'You are not login');

            }
        }
    }
    public function logoutUser(Request $requestl){
        if($requestl->session()->has('user')){
          
            $requestl->session()->forget('user');
            $requestl->session()->flush();
            return redirect()->back();
            

    }
}

}