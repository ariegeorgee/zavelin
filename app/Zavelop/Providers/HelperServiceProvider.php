<?php 
namespace App\Zavelop\Providers;

use Illuminate\Support\ServiceProvider;
use App\Zavelop\Src\Helper;

class HelperServiceProvider extends ServiceProvider
{
	public function register()
	{
		return $this->app->bind('helper-service-provider' , function(){
			return new Helper;
		});
	}
}