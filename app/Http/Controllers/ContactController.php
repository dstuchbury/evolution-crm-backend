<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;

class ContactController extends Controller
{
    public function index()
    {
        return ContactResource::collection(Contact::all());
    }

    public function store(ContactRequest $request)
    {
        return new ContactResource(Contact::create($request->validated()));
    }

    public function show(Contact $contact)
    {
        return new ContactResource($contact);
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());

        return new ContactResource($contact);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return response()->json();
    }
}
