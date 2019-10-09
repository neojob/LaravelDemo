<?php
namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\Auth;
use phpseclib\Crypt\Hash;
use SoapClient;
use Illuminate\Http\Request;
use App\Http\Controllers\Front;
use App;

use View;
use App\Library\Translate;
use Config;
use DB;
use Mail;
use Carbon\Carbon;


use App\Library\DesignPatterns\Singleton\Singleton;

class Main extends Front
{
    public function main(Request $request)
    {
//        https://refactoring.guru/ru/design-patterns/adapter/php/example

        echo "<br><hr>";
        if(Auth::check()){
            $logged_in = true;
        }else{
            $logged_in = false;
        }
        View::share('meta_title', Translate::text('',Config::get('currentLang')));
        View::share('meta_key', Translate::text('',Config::get('currentLang')));
        View::share('meta_description', Translate::text('',Config::get('currentLang')));

        View::share('page_title', 'Home');
        return view('front.main.main',[
            'logged_in' => $logged_in

        ]);
    }


}





