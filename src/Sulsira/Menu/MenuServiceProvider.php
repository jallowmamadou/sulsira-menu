<?php namespace Sulsira\Menu;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
class MenuServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

    public function boot(){
        $this->package('sulsira/menu');
        AliasLoader::getInstance()->alias('Menu', 'Sulsira\Menu\Menu');
    }
}
