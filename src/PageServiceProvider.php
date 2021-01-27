<?php

namespace IW\Page;

use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{

  public function boot()
  {
   $this->loadRoutesFrom(__DIR__.'/routes/web.php');
   $this->loadViewsFrom(__DIR__.'/views', 'page');
   $this->loadMigrationsFrom(__DIR__.'/database/migrations');
  }

  public function register()
  {
    # code...
  }
}
