<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function swtichlanguage($lang)
    {
        if (array_key_exists($lang, app('config')->get('languages'))) {
            session(['applocale' => $lang]);
        }
        return redirect()->back();
    }
    public function languageDemo()
    {
        return view('languageDemo');
    }
}
