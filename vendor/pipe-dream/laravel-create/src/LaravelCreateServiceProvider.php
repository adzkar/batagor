<?php

namespace PipeDream\LaravelCreate;

use Illuminate\Support\ServiceProvider;
use PipeDream\LaravelCreate\Commands\DumpAutoload;

class LaravelCreateServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            DumpAutoload::class,
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'pipe-dream');
        $this->registerStorages();
    }

    /*
    * Laravels default publish feature is annoying for user
    * Composer has no post-require-hook (to do it after package install)
    * So resorting to do it every new page load
    * Please fix this
    */
    public static function publishAssets()
    {
        \File::copyDirectory(
            __DIR__.'/public',
            public_path('vendor/pipe-dream/laravel-create')
        );

        \File::copy(
            __DIR__.'/../data/dataTypeGithubDump.js',
            public_path('vendor/pipe-dream/laravel-create/data/github.js')
        );
    }

    private function registerStorages()
    {
        $this->app['config']['filesystems.disks.self'] = [
            'driver' => 'local',
            'root'   => base_path(),
        ];

        $this->app['config']['filesystems.disks.pipe-dream'] = [
            'driver' => 'local',
            'root'   => storage_path('pipe-dream'),
        ];

        $this->app['config']['filesystems.disks.pipe-dream.sandbox'] = [
            'driver' => 'local',
            'root'   => storage_path('pipe-dream/sandbox'),
        ];
    }
}
