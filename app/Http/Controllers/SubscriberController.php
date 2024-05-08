<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subscriber.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|min:10|max:34',
            'password' => 'required|confirmed|min:8|max:8',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required'
        ]);
        // $email = $request->email;
        // $password = $request->password;
        // $firstname = $request->first_name;
        // $lastname = $request->last_name;
        // $phone = $request->phone;

        // $sub = new Subscriber();
        // $sub->email = $email;
        // $sub->password = $password;
        // $sub->first_name = $firstname;
        // $sub->last_name = $lastname;
        // $sub->phone = $phone;
        // $subscriber = $sub->save();

        $result = Subscriber::create($request->all());

        if ($result) {

            return back()->with('success', 'Registered Successfully!');
            
        } else {

            return back()->with('error', 'oops..something went wrong. please try again!');
        }
    }

    /**
     * Display the specified resource.
     */
    
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
