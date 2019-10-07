<?php

namespace App\Providers;

use App\Http\Repository\Contracts\ProductRepositoryInterface;
use App\Http\Repository\Contracts\RepositoryInterface;
use App\Http\Repository\Eloquent\ProductRepositoryEloquent;
use App\Http\Repository\Eloquent\RepositoryEloquent;
use App\Http\Service\Impl\ProductService;
use App\Http\Service\ProductServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RepositoryInterface::class,
            RepositoryEloquent::class);
        $this->app->singleton(ProductRepositoryInterface::class,
            ProductRepositoryEloquent::class);
        $this->app->singleton(ProductServiceInterface::class,
            ProductService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
