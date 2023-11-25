<?php

namespace App\Http\Controllers;

use App\Models\ActivityOutcomeType;
use App\Http\Requests\ActivityOutcomeTypeRequest;
use App\Http\Resources\ActivityOutcomeTypeResource;

class ActivityOutcomeTypeController extends Controller
{
    public function index()
    {
        return ActivityOutcomeTypeResource::collection(ActivityOutcomeType::all());
    }

    public function store(ActivityOutcomeTypeRequest $request)
    {
        return new ActivityOutcomeTypeResource(ActivityOutcomeType::create($request->validated()));
    }

    public function show(ActivityOutcomeType $activityOutcomeType)
    {
        return new ActivityOutcomeTypeResource($activityOutcomeType);
    }

    public function update(ActivityOutcomeTypeRequest $request, ActivityOutcomeType $activityOutcomeType)
    {
        $activityOutcomeType->update($request->validated());

        return new ActivityOutcomeTypeResource($activityOutcomeType);
    }

    public function destroy(ActivityOutcomeType $activityOutcomeType)
    {
        $activityOutcomeType->delete();

        return response()->json();
    }
}
