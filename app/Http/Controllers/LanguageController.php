<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function swtichlanguage($lang)
    {
        if (array_key_exists($lang, Config()::get('languages'))) {
            session()::put('applocale', $lang);
        }
        return Redirect::back();
    }
}
