<?php

namespace App\Http\Controllers;

use App\Models\ActivityStatus;
use App\Http\Requests\ActivityStatusRequest;
use App\Http\Resources\ActivityStatusResource;

class ActivityStatusController extends Controller
{
    public function index()
    {
        return ActivityStatusResource::collection(ActivityStatus::all());
    }

    public function store(ActivityStatusRequest $request)
    {
        return new ActivityStatusResource(ActivityStatus::create($request->validated()));
    }

    public function show(ActivityStatus $activityStatus)
    {
        return new ActivityStatusResource($activityStatus);
    }

    public function update(ActivityStatusRequest $request, ActivityStatus $activityStatus)
    {
        $activityStatus->update($request->validated());

        return new ActivityStatusResource($activityStatus);
    }

    public function destroy(ActivityStatus $activityStatus)
    {
        $activityStatus->delete();

        return response()->json();
    }
}
