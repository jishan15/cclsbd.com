<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }
    public function destroy($id)
    {
        $conatct = Contact::find($id)->delete();
        return redirect()->route('contact.index');
    }
}
