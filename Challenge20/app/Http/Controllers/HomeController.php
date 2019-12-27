<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserController;

class HomeController extends Controller
{
    public function index(Request $req)
    {
        $name = $req->session()->get("name");
        $lastName = $req->session()->get("lastName");
        $email = $req->session()->get("email");

        $data = [
            'name' => $name,
            'lastName' => $lastName,
            'email' => $email,
        ];

        return view('home',$data);
    }

    public function login()
    {
        return view('login');
    }
    public function result(StoreUserController $req)
    {

        // $validateData = $req->validate(
        //     [
        //         "name" => "required|max:15|alpha",
        //         "lastName" => "required|max:25|alpha",
        //         "email" => "email"
        //     ]
        // );
        $name = $req->input('name');
        $lastName = $req->input('lastName');
        $email = $req->input('email');

        $req->session()->put("name", $name);
        $req->session()->put("lastName", $lastName);
        $req->session()->put("email", $email);

        $name = $req->session()->get("name");
        $lastName = $req->session()->get("lastName");
        $email = $req->session()->get("email");

        $data = [
            'name' => $name,
            'lastName' => $lastName,
            'email' => $email,
        ];
        return view('result', $data);
    }
}
