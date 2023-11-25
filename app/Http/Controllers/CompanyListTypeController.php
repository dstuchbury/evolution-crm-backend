<?php

namespace App\Http\Controllers;

use App\Models\CompanyListType;
use App\Http\Requests\CompanyListTypeRequest;
use App\Http\Resources\CompanyListTypeResource;

class CompanyListTypeController extends Controller
{
    public function index()
    {
        return CompanyListTypeResource::collection(CompanyListType::all());
    }

    public function store(CompanyListTypeRequest $request)
    {
        return new CompanyListTypeResource(CompanyListType::create($request->validated()));
    }

    public function show(CompanyListType $companyListType)
    {
        return new CompanyListTypeResource($companyListType);
    }

    public function update(CompanyListTypeRequest $request, CompanyListType $companyListType)
    {
        $companyListType->update($request->validated());

        return new CompanyListTypeResource($companyListType);
    }

    public function destroy(CompanyListType $companyListType)
    {
        $companyListType->delete();

        return response()->json();
    }
}
