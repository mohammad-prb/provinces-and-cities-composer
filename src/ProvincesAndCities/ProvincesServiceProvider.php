<?php

namespace ProvincesAndCities;

use Illuminate\Support\ServiceProvider;

class ProvincesServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->singleton('provincesAndCities', Countries::class);
    }
}
