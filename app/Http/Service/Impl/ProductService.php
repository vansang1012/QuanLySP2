<?php


namespace App\Http\Service\Impl;

use App\Http\Repository\Contracts\ProductRepositoryInterface;
use App\Http\Service\ProductServiceInterface;
use App\Product;

class ProductService implements ProductServiceInterface
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll()
    {
        return $this->productRepository->getAll();
    }

    public function store($request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->code = $request->code;
        $product->available = $request->available;
        $product->price = $request->price;
        $this->productRepository->store($product);
        $statusCode = 201;
        $message = "Tao Moi Thanh Cong";
        if (!$product) {
            $statusCode = 500;
            $message = "error";
        }


        $data = [
            'statusCode' => $statusCode,
            'message' => $message
        ];
        return $data;

    }

    public function update($request, $id)
    {
        $product = $this->productRepository->findById($id);
        $product->name = $request->name;
        $product->code = $request->code;
        $product->available = $request->available;
        $product->price = $request->price;
        $this->productRepository->update($product);
        $statusCode = 201;
        $message = "update Thanh Cong";
        if (!$product) {
            $statusCode = 500;
            $message = "error";
        }


        $data = [
            'statusCode' => $statusCode,
            'message' => $message
        ];
        return $data;

    }

    public function destroy($id)
    {
        $product = $this->productRepository->findById($id);
        $this->productRepository->destroy($product);
        $statusCode = 200;
        $message = "Xoa Thanh Cong";
        if (!$product) {
            $statusCode = 500;
            $message = "error";
        }


        $data = [
            'statusCode' => $statusCode,
            'message' => $message
        ];
        return $data;
    }


}
