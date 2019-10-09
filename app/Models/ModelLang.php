<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ModelLang extends Model
{
    use Notifiable;

    protected $table = 'langs';
    public  $incrementing = 'id';
    public $timestamps = false;
    /**
     * Возвращает языки для регулярки скоокатенированные разделителем |
     * Например: ru|en|fr
     * @return string
     */
    public function get_lang_expression(){
        $langs = DB::table($this->table)->get(['iso'])->all();
        $prepared = array();
        if(!empty($langs)){
            foreach($langs as $lang){
                $prepared[] = $lang->iso;
            }
        }
        return implode('|',$prepared);
    }


}
