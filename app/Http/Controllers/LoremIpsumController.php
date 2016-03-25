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

        $gen = new Generator;

        $textLoremIpsum = implode("<br><br>",$gen->getParagraphs($request->paragraphs));

        return $textLoremIpsum;
    }
}
