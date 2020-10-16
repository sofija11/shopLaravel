<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
      
    private $model;

    function __construct()
    {
        $this->model = new Order();
    }
    public function posaljiiOrder(Request $r){
        $idUser=session('user')->idUser;
        $idProduct=$r->input('idProduct');
        $quantity= $r->input('quantity');
        try {
            $ubaci=$this->model->insertCart($idProduct,$idUser,$quantity);
            return redirect()->back()->with('message','Your order is shipped');
        }catch(Exception $e){
                Log::error($e->getMessage());
        }
    }
}
