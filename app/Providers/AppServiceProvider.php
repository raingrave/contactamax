<?php

namespace Contactamax\Providers;

use Contactamax\Entities\InputOrder;
use Contactamax\Entities\Item;
use Contactamax\Entities\Product;
use Contactamax\Entities\Repositories\InputOrderRepository;
use Contactamax\Entities\Repositories\ItemRepository;
use Contactamax\Entities\Repositories\ProductRepository;
use Contactamax\Services\Contracts\InputOrderServiceContract;
use Contactamax\Services\Contracts\ProductServiceContract;
use Contactamax\Services\InputOrderService;
use Contactamax\Services\ProductService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductServiceContract::class, function ($app) {
           return new ProductService($app['producRepository']);
        });

        $this->app->bind('producRepository', function () {
            return new ProductRepository(new Product());
        });

        $this->app->bind(InputOrderServiceContract::class, function ($app) {
            return new InputOrderService($app['inputOrderRepository'], $app['itemRepository']);
        });

        $this->app->bind('inputOrderRepository', function () {
            return new InputOrderRepository(new InputOrder());
        });

        $this->app->bind('itemRepository', function () {
            return new ItemRepository(new Item());
        });
    }
}
