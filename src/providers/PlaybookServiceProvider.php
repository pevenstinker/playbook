<?php

namespace PevenStinker\Playbook;

use Illuminate\Support\ServiceProvider;

class PlaybookServiceProvider extends ServiceProvider {
  /**
   * Register bindings in the container.
   *
   * @return void
   */
  /* public function register()
    {
    $this->app->singleton(Connection::class, function ($app) {
    return new Connection(config('riak'));
    });
    } */

  /**
   * Perform post-registration booting of services.
   *
   * @return void
   */
  public function boot() {
    $this->loadMigrationsFrom(__DIR__ . '/migrations');
  }

}
