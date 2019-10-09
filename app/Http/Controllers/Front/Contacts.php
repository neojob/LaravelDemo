<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Testing\HttpException;
use Illuminate\Http\Request;
use App\Http\Controllers\Front;
use App;
use League\Flysystem\Exception;
use View;
use App\Http\Requests\front\MailsValidate;
//use App\Models\Mail;
use Session;
use App\Mail\front\ContactPage;
use Mail;
use App\Models\Category;
use hQuery;
use App\Library\Translate;
use Config;


class Contacts extends Front
{
    public function contact()
    {

        $article = App\Models\Article::where('alias','=','contacts')->first();
        $article_hours = App\Models\Article::where('alias','=','working-hours-contact-page')->first();
        $all_entities = App\Models\Entity::all();

        View::share('meta_title', Translate::text($article['meta_title'],Config::get('currentLang')));
        View::share('meta_key', Translate::text($article['meta_key'],Config::get('currentLang')));
        View::share('meta_description', Translate::text($article['meta_desc'],Config::get('currentLang')));

        View::share('bottom_title', Translate::text($article['title'],Config::get('currentLang')));

        return view('front.contacts.contact',[
            'article_hours' => $article_hours,
            'article' => $article,
            'all_entities' => $all_entities
        ]);
    }
    public function postContact(MailsValidate $vRequest)
    {
        $validated_data = $vRequest->all();

        if($validated_data){
            $email = new App\Models\Mail();

            $email->full_name = $validated_data['nameF'].' '. $validated_data['nameL'];
            $email->email = $validated_data['email'];
            $email->phone = $validated_data['phone'];
            $email->company = $validated_data['company'];
            $email->body = $validated_data['body'];
            $email->status = 0;
            $email->save();

            Mail::to(env('CONTACT_EMAIL'))->send(new ContactPage($email));
            Session::flash('success', 'Successful sending!');
            echo "ok";die;
        }
//        return redirect()->route('contacts');
    }

}







