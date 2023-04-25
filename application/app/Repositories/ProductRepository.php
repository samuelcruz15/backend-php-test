<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository
{
    public function __construct()
    {
        $model = new Product();
        $this->model = $model;
    }

    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function store($request)
    {
        $model = $this->save($this->model, $request);
        return $model;
    }
    public function update($data, $id)
    {
        $model = $this->find($id);
        if ($model->status == "I") {
            return  response()->json(['status' => 'error', 'message' => 'Unable to edit inactive products'], 500);
        }

        return $this->updateData($model, $data);
    }
    public function find($id)
    {
        return $this->model->find($id);
    }

    public function save(Product $model, $data)
    {
        try {
            if (isset($data['code'])) {
                $model->code = $data['code'];
            }

            if (isset($data['name'])) {
                $model->name = $data['name'];
            }

            if (isset($data['brand'])) {
                $model->brand = $data['brand'];
            }
            if (isset($data['description'])) {
                $model->description = $data['description'];
            }
            if (isset($data['price'])) {
                $model->price = $data['price'];
            }
            if (isset($data['available_quantity'])) {
                $model->available_quantity = $data['available_quantity'];
            }
            $model->status = 'A';

            $model->save();

            return  response()->json(['status' => 'success', 'message' => 'Registered product.']);
        } catch (\Exception $e) {
            return  response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
    public function updateData(Product $model, $data)
    {
        try {
            if (isset($data['name'])) {
                $model->name = $data['name'];
            }

            if (isset($data['brand'])) {
                $model->brand = $data['brand'];
            }
            if (isset($data['description'])) {
                $model->description = $data['description'];
            }
            if (isset($data['price'])) {
                $model->price = $data['price'];
            }
            if (isset($data['available_quantity'])) {
                $model->available_quantity = $data['available_quantity'];
            }

            $model->save();

            return  response()->json(['status' => 'success', 'message' => 'Updated product.']);
        } catch (\Exception $e) {
            return  response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    public function delete($id)
    {
        try {
            $model = $this->find($id);

            $model->status = 'I';

            $model->save();

            return  response()->json(['status' => 'success', 'message' => 'Inactived product.']);
        } catch (\Exception $e) {
            return  response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    public function where($params = [])
    {
        $query = $this->model;

        foreach ($params as $key => $value) {
            $query = $query->where($value[0], $value[1], $value[2]);
        }

        return $query->first();
    }

    public function getSpecific($brand)
    {
        return $this->where([
            ['brand', '=', $brand]
        ]);
    }
}
