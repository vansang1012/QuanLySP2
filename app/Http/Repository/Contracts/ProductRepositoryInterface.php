<?php


namespace App\Http\Repository\Contracts;


interface ProductRepositoryInterface extends RepositoryInterface
{
    public function findById($id);
}
