<?php

namespace App\Providers;

use App\ViewComposers\back\LangComposer;
use App\ViewComposers\back\SettingsComposer;
use App\ViewComposers\back\TranslateComposer;
use App\ViewComposers\front\EntitiesComposer;
use App\ViewComposers\front\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['*'], LangComposer::class);
        View::composer(['*'], SettingsComposer::class);
        View::composer(['*'], TranslateComposer::class);
        View::composer(['*'], EntitiesComposer::class);
        View::composer(['*'], MenuComposer::class);
    }
}
