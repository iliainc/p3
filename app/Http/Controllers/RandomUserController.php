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

        $data = $request->all();
        // dd($data);

        // $data->getUsers();
        // dd($data->getUsers());


        // return \Faker\Name::name();
        // return \Faker\Internet::freeEmail($name = null);
        // return \Faker\PhoneNumber::phoneNumber();
        // return \Faker\PhoneNumber::safePhoneNumber();
        // return \Faker\Address::city();
        // return \Faker\Address::address();
        // return \Faker\Address::streetName();
        // return \Faker\Address::streetAddress($includeSecondary = false);
        // return \Faker\Address::city();
        // return \Faker\Address::state();
        // return \Faker\Address::stateAbbr();
        // return \Faker\Address::zipCode();
        // return \Faker\Address::zip();
        // return \Faker\Address::postcode();
        // return \Faker\Address::cityStateZip();
        // return \Faker\Address::country();

      return view('randomuser.postindex')->with(['data'=>$data]);
    }
}
