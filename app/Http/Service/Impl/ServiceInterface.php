<?php


namespace App\Http\Service\Impl;


interface ServiceInterface
{
    public function getAll();

    public function store($request);

    public function update($request,$id);
    public function destroy($id);
}
