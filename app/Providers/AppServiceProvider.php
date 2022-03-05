<?php

namespace App\Providers;

use App\Http\Services\DeliveryOrder;
use App\Http\Services\DineInOrder;
use App\Http\Services\OrderContract;
use App\Http\Services\TakeAwayOrder;
use http\Client\Request;
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
        $this->app->singleton(OrderContract::class, function () {
            if (request('type') == 'dine-in')
                return new DineInOrder();

            else if (request('type') == 'delivery')
                return new DeliveryOrder();

            else if (request('type') == 'takeaway')
                return new TakeAwayOrder();

            else
                abort(404);
        });
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
