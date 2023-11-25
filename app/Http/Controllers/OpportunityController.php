<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use App\Http\Requests\OpportunityRequest;
use App\Http\Resources\OpportunityResource;

class OpportunityController extends Controller
{
    public function index()
    {
        return OpportunityResource::collection(Opportunity::all());
    }

    public function store(OpportunityRequest $request)
    {
        return new OpportunityResource(Opportunity::create($request->validated()));
    }

    public function show(Opportunity $opportunity)
    {
        return new OpportunityResource($opportunity);
    }

    public function update(OpportunityRequest $request, Opportunity $opportunity)
    {
        $opportunity->update($request->validated());

        return new OpportunityResource($opportunity);
    }

    public function destroy(Opportunity $opportunity)
    {
        $opportunity->delete();

        return response()->json();
    }
}
