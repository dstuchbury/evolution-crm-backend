<?php

namespace App\Http\Controllers;

use App\Http\Requests\PipelineStageRequest;
use App\Http\Resources\PipelineStageResource;
use App\Models\PipelineStage;

class PipelineStageController extends Controller
{
    public function index() {
        return PipelineStageResource::collection(PipelineStage::all());
    }

    public function store(PipelineStageRequest $request) {
        return new PipelineStageResource(PipelineStage::create($request->validated()));
    }

    public function show(PipelineStage $pipelineStage) {
        return new PipelineStageResource($pipelineStage);
    }

    public function update(PipelineStageRequest $request, PipelineStage $pipelineStage) {
        $pipelineStage->update($request->validated());

        return new PipelineStageResource($pipelineStage);
    }

    public function destroy(PipelineStage $pipelineStage) {
        $pipelineStage->delete();

        return response()->json();
    }
}
