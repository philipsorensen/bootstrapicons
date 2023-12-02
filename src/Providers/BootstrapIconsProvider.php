<?php

namespace PhilipSorensen\BootstrapIcons\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BootstrapIconsProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 * 
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'bootstrapicons');
		Blade::componentNamespace('PhilipSorensen\\BootstrapIcons\\View\\Components', 'bootstrapicons');
	}
}