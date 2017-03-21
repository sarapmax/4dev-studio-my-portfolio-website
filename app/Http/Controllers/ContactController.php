<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
	public function getContact() {
		$contacts = Contact::orderBy('created_at', 'DESC')->paginate(30);

		return view('backoffice.contact.index', ['contacts' => $contacts]);
	}

    public function postContact(Request $request) {
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required|email',
    		'phone_number' => 'required|alpha_num|digits:10',
    		'message' => 'required',
    	]);

    	$contact = new Contact;

    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->phone_number = $request->phone_number;
    	$contact->read = 0;
    	$contact->message = $request->message;

    	$contact->save();

    	alert()->success('Your feedback has been send', 'Success!')->autoclose(2500);

    	return redirect()->back();
    }

    public function readContact($id) {
    	$contact = Contact::find($id);

    	$contact->read = 1;

    	$contact->save();

    	return redirect()->back();
    }

    public function destroyContact($id) {
    	$contact = Contact::find($id);

    	$contact->delete();

    	alert()->success('feedback was deleted', 'Success!');

    	return redirect()->back();
    }
}
