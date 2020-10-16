<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AddProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $model;

    public function __construct(){
        $this->model = new Product();
    }
    public function index()
    {
        $products = $this->model->getAllProductsAdmin();
        return view("admin.pages.products",['products'=> $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=$this->model->getCategories();
        
        $colors=$this->model->getColours();
        return view("admin.pages.insertProduct",['categories'=>$categories,'colors'=>$colors]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( AddProductRequest $r)
    {
        //
        if($r->has('sendProduct'))   {
            $productAdmin= $r->input('productAdmin');
            $priceAdmin= $r->input('priceAdmin');
            $categoryAdmin= $r->input('categoryAdmin');
            $colorAdmin= $r->input('colorAdmin');
           
            $imageAdmin= $r->file('imageAdmin');
           
          
           // dd($imageAdmin->getPathname());
            $directory_default=$imageAdmin.\public_path();
           // tu je smestena dd($directory_default);
            $fileName =  $imageAdmin->getClientOriginalName();
            $fileNameNew=time()."_".$fileName; //ime slike
            $newDir='/images/productsShop/'.$fileNameNew;
            //dd($newDir);
           // dd($fileNameNew);
           //dd($fileName.public_path());
         $imageAdmin->move(\public_path()."/images/productsShop/",$fileNameNew);
            //dd($imageAdmin.\public_path());
            //dd($imageAdmin);
         try{
            $photoAdmin = $this->model->insertPhotoAdmin($productAdmin,$priceAdmin,$fileNameNew,$categoryAdmin,$colorAdmin);
            return redirect()->back()->with('message', 'Product added');

         } catch(\Exception $e){
            return response(["greska" => $ex->getMessage()], 505);
            return redirect()->back()->with('message', 'Failed ');
           

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
     
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
        $colors=$this->model->getColours();
        $categories=$this->model->getCategories();
        $productOne=$this->model->getOneProduct($id);
       
        return view("admin.pages.updateProduct",['product'=>$productOne,'colors'=>$colors, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $re, $id)
    {
        //
        //dd($re);
        if($re->has('sendProductUpdate'))   {
            $productAdminUpdate= $re->input('productAdminUpdate');
            $priceAdminUpdate= $re->input('priceAdminUpdate');
            $categoryAdminUpdate= $re->input('categoryAdminUpdate');
            $colorAdminUpdate= $re->input('colorAdminUpdate');
           
            $imageAdminUpdate= $re->file('imageAdminUpdate');
           
          
           // dd($imageAdmin->getPathname());
            $directory_default=$imageAdminUpdate.\public_path();
           // tu je smestena dd($directory_default);
            $fileName =  $imageAdminUpdate->getClientOriginalName();
            $fileNameNew=time()."_".$fileName; //ime slike
            $newDir='/images/productsShop/'.$fileNameNew;
            //dd($newDir);
           // dd($fileNameNew);
           //dd($fileName.public_path());
         $imageAdminUpdate->move(\public_path()."/images/productsShop/",$fileNameNew);
            //dd($imageAdmin.\public_path());
            //dd($imageAdmin);
         try{
            $photoAdminUpdate = $this->model->updatePhotoAdminUpdate($id,$productAdminUpdate,$priceAdminUpdate,$fileNameNew,$categoryAdminUpdate,$colorAdminUpdate);
            return redirect()->back()->with('message', 'Product updated');

         } catch(\Exception $e){
            return response(["greska" => $ex->getMessage()], 505);
            return redirect()->back()->with('message', 'Failed ');
           

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
        //
        try{
            $this->model->deleteProduct($id);
            return redirect()->back()->with('message', 'Product has been deleted');
        } catch(\Exception $e){
            return response(["greska" => $e->getMessage()], 505);
        }
    }
}
