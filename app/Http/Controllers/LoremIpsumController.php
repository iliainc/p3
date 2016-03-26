<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Badcow\LoremIpsum\Generator;

class LoremIpsumController extends Controller
{
    public function getIndex()
    {
        return view('loremipsum.index');
    }
    public function postIndex(Request $request)
    {
        $this->validate($request, [
            'paragraphs'=>'required|numeric'
        ]);

        $data = $request->all();

        $gen = new Generator;

        // Create string from generated paragraphs array, separating each paragraph with <br><br>
        // $textLoremIpsum = implode("<br><br>",$gen->getParagraphs($data['paragraphs']));
        $textLoremIpsum2 = $gen->getParagraphs($data['paragraphs']);

        if(!$textLoremIpsum2) {
            dd("Error generating LoremIpsum text");
        }
        // return view('loremipsum.postindex')->with(['textLoremIpsum'=>$textLoremIpsum]);
         return view('loremipsum.postindex')->with(['textLoremIpsum2'=>$textLoremIpsum2]);
    }
}
