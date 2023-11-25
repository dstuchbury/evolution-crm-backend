<?php

namespace App\Http\Controllers;

use App\Models\ActivityType;
use App\Http\Requests\ActivityTypeRequest;
use App\Http\Resources\ActivityTypeResource;

class ActivityTypeController extends Controller
{
    public function index()
    {
        return ActivityTypeResource::collection(ActivityType::all());
    }

    public function store(ActivityTypeRequest $request)
    {
        return new ActivityTypeResource(ActivityType::create($request->validated()));
    }

    public function show(ActivityType $activityType)
    {
        return new ActivityTypeResource($activityType);
    }

    public function update(ActivityTypeRequest $request, ActivityType $activityType)
    {
        $activityType->update($request->validated());

        return new ActivityTypeResource($activityType);
    }

    public function destroy(ActivityType $activityType)
    {
        $activityType->delete();

        return response()->json();
    }
}
