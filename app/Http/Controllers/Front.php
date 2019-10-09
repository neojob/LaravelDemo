<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Back\Settings;
use App\Models\Article;
use App\Models\Menu;
use App\Models\Lot;
use App\Models\Section;
use App\Models\Setting;
use Illuminate\Http\Request;
use View;



class Front extends Controller
{

    public function __construct(Request $request)
    {
        View::share('meta_title', '');
        View::share('meta_key', '');
        View::share('meta_description', '');
        View::share('page_title', '');
    }
}
