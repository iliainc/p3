<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RandomUserController extends Controller
{
    public function getIndex()
    {
        return view('randomuser.index');
    }
    public function postIndex(Request $request)
    {
        $this->validate($request, [
            'users'=>'required|numeric'

        ]);

        return 'Generating Random User!';
    }
}
