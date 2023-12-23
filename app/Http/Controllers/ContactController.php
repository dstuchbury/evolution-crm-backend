<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Responses\WebResponse;
use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;
use App\Http\Resources\ContactCollection;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $paginate = $request->get('paginate') ?? 10;
        return new ContactCollection(ContactResource::collection(Contact::with('company')->paginate($paginate)));
    }

    public function store(ContactRequest $request)
    {
        return new ContactResource(Contact::create($request->validated())->load('company'));
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
