<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyTypeRequest;
use App\Http\Resources\CompanyTypeResource;
use App\Models\CompanyType;

class CompanyTypeController extends Controller
{
    public function index() {
        return CompanyTypeResource::collection(CompanyType::all());
    }

    public function store(CompanyTypeRequest $request) {
        return new CompanyTypeResource(CompanyType::create($request->validated()));
    }

    public function show(CompanyType $companyType) {
        return new CompanyTypeResource($companyType);
    }

    public function update(CompanyTypeRequest $request, CompanyType $companyType) {
        $companyType->update($request->validated());

        return new CompanyTypeResource($companyType);
    }

    public function destroy(CompanyType $companyType) {
        $companyType->delete();

        return response()->json();
    }
}
