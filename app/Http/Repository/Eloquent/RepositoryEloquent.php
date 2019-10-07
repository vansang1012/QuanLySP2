<?php


namespace App\Http\Repository\Eloquent;


use App\Http\Repository\Contracts\RepositoryInterface;
use App\Product;

class RepositoryEloquent implements RepositoryInterface
{

    public function getAll()
    {
        return Product::all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function update($obj)
    {
        $obj->save();
    }
    public function destroy($obj)
    {
        $obj->delete();
    }

}
