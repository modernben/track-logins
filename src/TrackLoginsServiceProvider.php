<?php

namespace Modernben\TrackLogins;

use Modernben\TrackLogins\Commands\TrackLoginsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TrackLoginsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('track_logins')
            ->hasConfigFile()
            // ->hasViews()
            ->hasMigration('create_track_logins_table')
            // ->hasCommand(TrackLoginsCommand::class)
            ;
    }

    public function registeringPackage()
    {
        $this->app->register(TrackLoginsEventServiceProvider::class);
    }
}
