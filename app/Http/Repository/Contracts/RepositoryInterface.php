<?php


namespace App\Http\Repository\Contracts;


interface RepositoryInterface
{
    public function getAll();

    public function store($obj);

    public function update($obj);

    public function destroy($obj);
}
