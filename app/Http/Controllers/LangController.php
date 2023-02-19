<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function getData($lang, $id)
    {
        $translatableMgs = Data::find($id)->translatableMgs;

        $translations = json_decode($translatableMgs, true);
        $message = array('message' => $translations[$lang]);

        return response()->json($message);
    }
    public function getAllData($lang)
    {
        $messages = Data::all();
        $result = array();

        for ($i = 0; $i < count($messages); $i++) {
            $parsedMessage = json_decode($messages[$i]->translatableMgs, true);
            $result[] = array("id" => $messages[$i]["id"], 'message' => $parsedMessage[$lang]);
        }
        return response()->json($result);
    }
    public function addData(Request $request)
    {
        $data =  Data::create([
            'translatableMgs' => $request->translatableMgs,
        ]);


        return response()->json($data);
    }
}
