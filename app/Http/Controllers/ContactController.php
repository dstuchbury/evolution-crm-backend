<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;
use App\Responses\WebResponse;

class ContactController extends Controller
{
    public function index()
    {
        return WebResponse::respondOk(
            'list contacts',
            null,
            ContactResource::collection(Contact::with('company')->get()),
        );
    }

    public function store(ContactRequest $request)
    {
        return new ContactResource(Contact::create($request->validated()));
    }

    public function show(Contact $contact)
    {
        $contact->load([
            'company', 'activities', 'leads', 'opportunities'
        ]);

        return WebResponse::respondOk(
            'show contact',
            null,
            new ContactResource($contact),
        );
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
