<?php
namespace App\ViewComposers\front;

use Illuminate\View\View;
use App\Library\Settings;


class SettingsComposer
{

    protected $settings;

    /**
     * Create a new profile composer.
     * @return void
     */
    public function __construct()
    {
        $this->settings = Settings::instance();
    }


    public function compose(View $view)
    {
        $view->with('settings', $this->settings);
    }
}
