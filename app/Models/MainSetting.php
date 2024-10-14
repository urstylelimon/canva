<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainSetting extends Model
{
    protected $fillable = ['key', 'value'];

    public static function get($key, $default = null)
    {
        $setting = static::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    public static function set($key, $value)
    {
        return static::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
