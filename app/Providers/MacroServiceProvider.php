<?php namespace App\Providers;

use Illuminate\Html\HtmlServiceProvider;

class MacroServiceProvider extends HtmlServiceProvider {

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
		// Macros must be loaded after the HTMLServiceProvider's
		// register method is called. Otherwise, csrf tokens
		// will not be generated
		parent::register();

		// Load macros
		require base_path() . '/app/macro.php';
	}
}