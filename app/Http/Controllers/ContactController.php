<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index')
            ->with('contacts', $contacts);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->route('contacts.index');
    }

    public function show(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show')
            ->with('contact', $contact);
    }

    public function edit(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit')
            ->with('contact', $contact);
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());
        return redirect()->route('contacts.show', $contact->id);
    }

    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
