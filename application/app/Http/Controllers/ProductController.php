<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $productService = new ProductService();
        $this->productService = $productService;
    }

    public function getAll(){
        return $this->productService->getAll();
    }

    public function store(StoreProductRequest $request){
       return $this->productService->store($request->all());
    }
    public function getSpecific($id){
        return $this->productService->getSpecific($id);
    }

    public function update(UpdateProductRequest $request,$id){
        return $this->productService->update($request->all(),$id);
     }

     public function delete($id){
        return $this->productService->delete($id);
     }
}
