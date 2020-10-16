<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AddUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $model;

    public function __construct(){
        $this->model =new User();
    }
    public function index()
    {
        // show table(view)
        $users=$this->model->getAllUsers();
        return view("admin.pages.users",['users'=>$users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories=$this->model->getRoles();
       
        return view("admin.pages.insertUser",['categories'=>$categories]);
        //form for insert admin.product.create 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequest $requ)
    {
        //poziva se posle create try catch 
        if($requ->has('sendUserAdmin'))   {
         $firstnameAdmin= $requ->input('firstnameAdmin');
         $lastnameAdmin= $requ->input('lastnameAdmin');
         $usernameAdmin= $requ->input('usernameAdmin');
         $role= $requ->input('roleAdmin');
         $emailAdmin= $requ->input('emailAdmin');
         $passwordAdmin= $requ->input('passwordAdmin');
        
       

        try{
            $userAdmin = $this->model->insertUserAdmin($firstnameAdmin,$lastnameAdmin,$usernameAdmin,$role,$emailAdmin,$passwordAdmin);
            return redirect()->back()->with('message', 'User added');
        } catch(Éxception $e){
            return response(["greska" => $ex->getMessage()], 505);
            return redirect()->back()->with('message', 'Error');
           
        }
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //prikaz jednog
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dohvatanje UPDATE, VRATIM VIEW ISPISANI PODACI OD JEDNOG, FORM ACTION JE UPDTE
        $userOne=$this->model->getOneUser($id);
       
        return view("admin.pages.updateUser",['user'=>$userOne]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $r, $id)
    {
        //UPDATe
       // dd($r);
       if($r->has('sendUserAdminUpdate'))   {
        $firstnameAdmin= $r->input('firstnameAdminUpdate');
        $lastnameAdmin= $r->input('lastnameAdminUpdate');
        $usernameAdmin= $r->input('usernameAdminUpdate');
        $role= $r->input('roleAdminUpdate');
        $emailAdmin= $r->input('emailAdminUpdate');
        $passwordAdmin= $r->input('passwordAdminUpdate');
       
      

       try{
           $userAdmin = $this->model->updateUser($id,$firstnameAdmin,$lastnameAdmin,$role,$usernameAdmin,$emailAdmin,$passwordAdmin);
           return redirect()->back()->with('message', 'User updated');
       } catch(Éxception $e){
            return response(["greska" => $ex->getMessage()], 505);
            return redirect()->back()->with('message', 'Error');
           
            }
           }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE
        try{
            $this->model->deleteUser($id);
            return redirect()->back()->with('message', 'User has been deleted');
        } catch(\Exception $e){
            return response(["greska" => $e->getMessage()], 505);
        }
    }
}
