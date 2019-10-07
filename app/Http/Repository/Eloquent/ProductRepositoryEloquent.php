<?php


namespace App\Http\Repository\Eloquent;


use App\Http\Repository\Contracts\ProductRepositoryInterface;
use App\Product;

class ProductRepositoryEloquent extends RepositoryEloquent implements ProductRepositoryInterface
{
    public function findById($id)
    {
        $product = Product::findorfail($id);
        return $product;
    }

}
