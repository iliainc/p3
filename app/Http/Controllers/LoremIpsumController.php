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

        // $textLoremIpsum = implode("<br><br>",$gen->getParagraphs($request->paragraphs));
        $textLoremIpsum = implode("<br><br>",$gen->getParagraphs($data['paragraphs']));

        // return $textLoremIpsum;
         return view('loremipsum.postindex')->with(['data'=>$data]);
        //return view('loremipsum.postindex', compact('textLoremIpsum'));

    }
}
