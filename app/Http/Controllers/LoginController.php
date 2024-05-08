<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class LoginController extends Controller
{

    public function index()
    {
        return view('subscriber.login');
    }
    public function login(Request $request)
    {

        $request->validate([
            'email' => "required|email",
            'password' => "required",
        ]);


        $email = $request->email;
        $password = $request->password;

        $subscriber = Subscriber::where(['email' => $email, 'password' => $password])->first();

        if ($subscriber) {

            $request->session()->put('id', $subscriber->id);

            return redirect(Route('band.page'))->with('success', 'Logged In Successfully!');

        } else {

            return back()->with('error', 'something went wrong. please try again!');

        }
    }
    //
}
