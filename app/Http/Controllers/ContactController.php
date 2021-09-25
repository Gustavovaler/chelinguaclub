<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function storeContact(Request $request){

        try {
           $contacto = new Contact();
            $contacto->name = $request->input('name');
            $contacto->email = $request->input('email');
            $contacto->msg  = $request->input('message');
            $contacto->phone  = $request->input('phone');

            $contacto->save();

        return response()->json($contacto);
        } catch (\Error $th) {
            return response()->json(['status' => 'error']);
        }
    }

    public function deleteContact($id){
        $contact = Contact::find($id);
        $res = $contact->delete();
        return response()->json(['status' =>  $res]);
    }

    public function index(){
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.contact', compact('contacts'));
    }

}
