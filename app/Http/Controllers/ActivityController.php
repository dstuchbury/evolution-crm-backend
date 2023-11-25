<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Http\Requests\ActivityRequest;
use App\Http\Resources\ActivityResource;

class ActivityController extends Controller
{
    public function index()
    {
        return ActivityResource::collection(Activity::all());
    }

    public function store(ActivityRequest $request)
    {
        return new ActivityResource(Activity::create($request->validated()));
    }

    public function show(Activity $activity)
    {
        return new ActivityResource($activity);
    }

    public function update(ActivityRequest $request, Activity $activity)
    {
        $activity->update($request->validated());

        return new ActivityResource($activity);
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();

        return response()->json();
    }
}
