<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    use Translatable;
    protected $with = ['translations'];
    public $translatedAttributes = ['value'];

    protected $guarded = [];

    public static function setMany($settings)
    {
        foreach ($settings as $key => $value) {
            self::set($key, $value);
        }
    }

    public static function set($key, $value)
    {
        if ($key == 'translatable') {
            return static::setTranslatableSettings($value);
        }

        $isArray = is_array($value);
        if ($isArray) {
            $value =  json_encode($value);
        }

        static::updateOrCreate(['key' => $key, 'plain_value' => $value]);
    }

    public static function setTranslatableSettings($settings = [])
    {
        foreach ($settings as $key => $value) {
            static::updateOrCreate(['key' => $key], [

                'is_translatable' => true,
                'value' => $value
            ]);
        }
    }
}
