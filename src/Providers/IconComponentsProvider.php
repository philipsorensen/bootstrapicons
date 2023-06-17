<?php

namespace PhilipSorensen\IconComponents\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class IconComponentsProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 * 
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'iconcomponents');
		Blade::componentNamespace('PhilipSorensen\\IconComponents\\View\\Components', 'iconcomponents');
	}
}