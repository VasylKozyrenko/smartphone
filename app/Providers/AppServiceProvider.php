<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Lib\Binary\Academy\Smartphone\Smartphone;
use App\Lib\Binary\Academy\Smartphone\Processor;
use App\Lib\Binary\Academy\Smartphone\Camera;
use App\Lib\Binary\Academy\Smartphone\Display;
use App\Lib\Binary\Academy\Smartphone\Battery;

class AppServiceProvider extends ServiceProvider {

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
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);

        $smartphone = new Smartphone('Apple iPhone', new Processor(), new Display(), new Camera(), new Battery());
        $this->app->instance('Smartphone', $smartphone);
	}

}
