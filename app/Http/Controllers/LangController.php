<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function getData($lang)
    {
        $translatableName = '{"en":"Hello","ta":"வணக்கம்","si":"ආයුබෝවන්"}';
        $translations = json_decode($translatableName, true);
        $message = array('message' => $translations[$lang]);

        return response()->json($message);
    }
}
