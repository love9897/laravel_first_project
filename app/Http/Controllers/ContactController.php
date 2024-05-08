<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{

    public function list()
    {
        $data = contact::paginate(2);
        return view('pages.contactlist', ['contact_list' => $data]);
    }


    public function delete(Request $request, $id = null)
    {
        if ($id) {

            $contact = contact::find($id);
            dd($contact);
            $contact->delete();

            $request->session()->put('success', 'Deleted Successfully!');
        }
        return back();
    }
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $result = contact::create($request->all());

        if ($result) {
            return back()->with('success', 'Contact Add Successfully');
        } else {
            return back()->with('error', 'try again');
        }
    }
}
