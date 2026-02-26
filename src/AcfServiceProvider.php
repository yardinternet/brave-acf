<?php

declare(strict_types=1);

namespace Yard\Acf;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Yard\Acf\Registrar\Registrar;

class AcfServiceProvider extends PackageServiceProvider
{
	public function configurePackage(Package $package): void
	{
		$package
			->name('brave-acf')
			->hasConfigFile();
	}

	public function packageRegistered(): void
	{
		$this->app->bind(Registrar::class, function () {
		$registrar = new Registrar();
		$registrar->addFieldGroups(config('acf.field_groups'));
		$registrar->addForms(config('acf.forms'));
		$registrar->addOptionPages(config('acf.option_pages'));

		return $registrar;
		});
	}

	public function packageBooted(): void
	{
		app(Registrar::class)->register();
	}
}
