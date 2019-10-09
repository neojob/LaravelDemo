<?php


//Route::get('/', function () {
    //1
//    preg_replace();

//2
//    $num = [2,5,6,4,8];
//    usort($num,function ($a, $b){ //SORT
//       return $a <=> $b;
//    });
//    echo "<pre>";
//    print_r($num);

//3
//    echo $_GET['x'] ?? "";  // here used ISSET()
//    echo $a ?? $b ?? 'OK';
//4
//    use A\B{
//        sss,
//        ddd,
//        ff\bbb
//    }

//5
//    echo preg_replace_callback_array(
//        [
//            "/PHP5/" => function(){return "no!";},
//            "/PHP7/" => function(){return "yes!";}
//        ],
//        "PHP7"
//    );

//6 ananimni class*********************************************<------
//$message = (new class() implements Message{
//    public function getText()
//    {
//        return "OK!";
//    }
//});
//Logger::log($message);

//7
//diclare(strict_types = 1); //this must be on first line
//function add(int $a){
//    return $a;
//}
//add('2');

//8
//function add(int $a): int
//{
//    return $a;
//}
//9********************************************generators1
//function gen(){
//    yield 1;
//    yield 2;
//    yield from gen2();
//}
//function gen2(){
//    yield 3;
//    yield 4;
//    yield "END";
//}
//foreach (gen() as $i){
//    echo $i. "\n";
//}
//10********************************************ananim functions
//function foo(){ return function (){ echo 'OK';};}
////php5
//    $x = foo(); $x();
////php7
//    foo()();

//11
//$arr = ["a" => "b"];
//$b = 'OK';
//echo ${$arr['a']};  //ok
//12
//    ->Error<-(FATAL ERROR) and  ->TypeError<-   --Exeption-i poxaren brnum a fatal errorner@
//13
//    catch(Throwable $e) -------sa brnum a ham exeptionner@ ham el fatalner@ miasin
//    catch(Exception $e) --- sa fatalner@ chi brnum
//    catch(DivisionByZeroError $e) ---------- 10/0 bnum a sa
//14
//    $arr = ["user" => "root","pass"=>"secret"];
//    define("DB",$arr);
//    echo DB['user'];
//    return view('welcome');
//});


//SOCIALITE










/**************************************************************************
|--------------------------------------------------------------------------
| Back
|--------------------------------------------------------------------------
**/

Route::get('/loginBackPart','Auth\Back\LoginController@Login')->name('Log');
Route::post('/loginBackPart','Auth\Back\LoginController@postLogin')->name('postLog');
Route::get('/logout','Auth\Back\LoginController@Logout')->name('Logout');

Route::group(['prefix'=>'admin/', 'middleware' => ['web','admin']], function (){
    Route::get('dashboard', 'Back\Main@main')->name('adminDashboard');

    Route::get('/users/list', 'Back\Users@usersList')->name('adminUserList');
    Route::get('/users/delete/{id?}', 'Back\Users@usersDelete')->name('adminUserDelete');
    Route::get('/users/liveSearch', 'Back\Users@liveSearch')->name('adminLiveUserSearch');

    Route::get('/languages/list', 'Back\Languages@languagesList')->name('adminLanguagesList');
    Route::get('/languages/add', 'Back\Languages@languagesAdd')->name('adminLanguagesAdd');
    Route::post('/languages/add', 'Back\Languages@postLanguagesAdd')->name('postAdminLanguagesAdd');
    Route::get('/languages/edit/{id?}', 'Back\Languages@languagesEdit')->name('adminLanguagesEdit');
    Route::post('/languages/edit/{id?}', 'Back\Languages@postLanguagesEdit')->name('postAdminLanguagesEdit');
    Route::get('/languages/delete/{id?}', 'Back\Languages@languagesDelete')->name('adminLanguagesDelete');

    Route::get('/settings/list', 'Back\Settings@settingsList')->name('adminSettingsList');
    Route::get('/settings/add', 'Back\Settings@settingsAdd')->name('adminSettingsAdd');
    Route::post('/settings/add', 'Back\Settings@postSettingsAdd')->name('postAdminSettingsAdd');
    Route::get('/settings/edit/{id?}', 'Back\Settings@settingsEdit')->name('adminSettingsEdit');
    Route::post('/settings/edit/{id?}', 'Back\Settings@postSettingsEdit')->name('postAdminSettingsEdit');
    Route::get('/settings/delete/{id?}', 'Back\Settings@settingsDelete')->name('adminSettingsDelete');

    Route::get('/menus/list', 'Back\Menus@menusList')->name('adminMenusList');
    Route::get('/menus/add', 'Back\Menus@menusAdd')->name('adminMenusAdd');
    Route::post('/menus/add', 'Back\Menus@postMenusAdd')->name('postAdminMenusAdd');
    Route::get('/menus/edit/{id?}', 'Back\Menus@menusEdit')->name('adminMenusEdit');
    Route::post('/menus/edit/{id?}', 'Back\Menus@postMenusEdit')->name('postAdminMenusEdit');
    Route::get('/menus/delete/{id?}', 'Back\Menus@menusDelete')->name('adminMenusDelete');

    Route::get('/entities/list', 'Back\Entities@entitiesList')->name('adminEntitiesList');
    Route::get('/entities/add', 'Back\Entities@entitiesAdd')->name('adminEntitiesAdd');
    Route::post('/entities/add', 'Back\Entities@postEntitiesAdd')->name('postAdminEntitiesAdd');
    Route::get('/entities/edit/{id?}', 'Back\Entities@entitiesEdit')->name('adminEntitiesEdit');
    Route::post('/entities/edit/{id?}', 'Back\Entities@postEntitiesEdit')->name('postAdminEntitiesEdit');
    Route::get('/entities/delete/{id?}', 'Back\Entities@entitiesDelete')->name('adminEntitiesDelete');

});

/**************************************************************************
|--------------------------------------------------------------------------
| Front
|--------------------------------------------------------------------------
 */



//Login via gitHub...
Route::post('login', 'Auth\Front\LoginController@login');
Route::post('logout', 'Auth\Front\LoginController@logout')->name('logout');

Route::get('login', 'Auth\Front\LoginController@showLoginForm')->name('login');

// Registration Routes...
Route::get('register', 'Auth\Front\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\Front\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\Front\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\Front\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\Front\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\Front\ResetPasswordController@reset');

Route::get('logout', 'Auth\Front\LoginController@logout')->name('logout');
Route::get('login/github', 'Auth\Front\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\Front\LoginController@handleProviderCallback');


Route::group(['prefix'=>Config::get('routeLang'), 'middleware' => ['web']], function (){
    Route::get('/', 'Front\Main@main')->where('lang', '[A-Za-z]+')->name('home');

    Route::get('pattern/abstractFactory', 'Front\Patterns\AbstractFactoryCheck@index')->where('lang', '[A-Za-z]+');
    Route::get('pattern/adapter', 'Front\Patterns\AdapterCheck@index')->where('lang', '[A-Za-z]+');
    Route::get('pattern/composite', 'Front\Patterns\CompositeCheck@index')->where('lang', '[A-Za-z]+');
    Route::get('pattern/decorator', 'Front\Patterns\DecoratorCheck@index')->where('lang', '[A-Za-z]+');
    Route::get('pattern/facade', 'Front\Patterns\FacadeCheck@index')->where('lang', '[A-Za-z]+');
    Route::get('pattern/factoryMethod', 'Front\Patterns\FactoryMethodCheck@index')->where('lang', '[A-Za-z]+');
    Route::get('pattern/observer', 'Front\Patterns\ObserverCheck@index')->where('lang', '[A-Za-z]+');
    Route::get('pattern/singleton', 'Front\Patterns\SingletonCheck@index')->where('lang', '[A-Za-z]+');
    Route::get('pattern/strategy', 'Front\Patterns\StrategyCheck@index')->where('lang', '[A-Za-z]+');




    Route::get('{alias}', 'Front\Pages@pages')->where('lang', '[A-Za-z]+')->name('pages');

});




