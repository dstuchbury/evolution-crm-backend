<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadRequest;
use App\Http\Resources\LeadResource;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index() {
        return LeadResource::collection(Lead::all());
    }

    public function store(LeadRequest $request) {
        return new LeadResource(Lead::create($request->validated()));
    }

    public function show(Lead $lead) {
        return new LeadResource($lead);
    }

    public function update(LeadRequest $request, Lead $lead) {
        $lead->update($request->validated());

        return new LeadResource($lead);
    }

    public function destroy(Lead $lead) {
        $lead->delete();

        return response()->json();
    }
}
