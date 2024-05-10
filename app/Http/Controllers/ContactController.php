<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{

    public function list()
    {
        $data = contact::paginate(10);
        return view('pages.contactlist', ['contact_list' => $data]);
    }


    public function delete(Request $request, $id = null)
    {
        if ($id) {

            $contact = contact::find($id);

            $contact->delete();

            $request->session()->flash('success', 'Deleted Successfully!');
        }
        return back();
    }
    public function get(Request $request, $id = null)
    {

        if ($id) {

            $contact = contact::find($id);

            return view('pages.contact_edit', ['oldcontact' => $contact]);
        }
    }

    public function update(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,gif,svg'
        ]);


        if ($request->id) {

            $contact = contact::find($request->id);



            // $result = contact::create($request->all());

            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->address = $request->address;

            if (isset($request->image)) {

                $extension = $request->image->extension();
                $unique_name = time() . '.' . $extension;
                $request->image->storeAs('public/upload/images', $unique_name);
                $contact->image = $unique_name;
            }

            $result = $contact->save();

            if ($result) {
                return back()->with('success', 'Contact Updated Successfully');

            } else {
                return back()->with('error', 'Contact not Updated');

            }

        }

    }
    public function contact(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,gif,svg'
        ]);

        $unique_name = '';

        if (isset($request->image)) {
            $extension = $request->image->extension();
            $unique_name = time() . '.' . $extension;
            $request->image->storeAs('public/upload/images', $unique_name);

        }

        // $result = contact::create($request->all());

        $arr = $request->all();
        $arr['image'] = $unique_name;


        $result = Contact::create($arr);

        if ($result) {
            return back()->with('success', 'Contact Added Successfully');
        }
    }
}
