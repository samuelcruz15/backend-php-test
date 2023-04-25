<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
  protected $productRepository;

  public function __construct()
  {
    $productRepository = new ProductRepository();
    $this->productRepository = $productRepository;
  }

  public function store($request)
  {
    return $this->productRepository->store($request);
  }

  public function getAll()
  {
    return $this->productRepository->getAll();
  }

  public function getSpecific($id)
  {
    return $this->productRepository->find($id);
  }
  public function update($request, $id)
  {
    if ($this->productRepository->find($id) == null) {
      return  response()->json(['status' => 'error', 'message' => 'Product not found'], 500);
    }
    return $this->productRepository->update($request, $id);
  }
  public function delete($id)
  {
    if ($this->productRepository->find($id) == null) {
      return  response()->json(['status' => 'error', 'message' => 'Product not found'], 500);
    }
    return $this->productRepository->delete($id);
  }
}
