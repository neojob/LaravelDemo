<?php

namespace App\ViewComposers\back;

use Illuminate\View\View;
use App\ModelLang;

class LangComposer
{

    protected $all_langs;

    /**
     * Create a new profile composer.
     * @return void
     */
    public function __construct()
    {
        $all_langs = ModelLang::all();
        $this->all_langs = $all_langs;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('all_langs', $this->all_langs);
    }
}
