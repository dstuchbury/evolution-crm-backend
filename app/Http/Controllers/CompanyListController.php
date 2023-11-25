<?php

namespace App\Http\Controllers;

use App\Models\CompanyList;
use App\Http\Requests\CompanyListRequest;
use App\Http\Resources\CompanyListResource;

class CompanyListController extends Controller
{
    public function index()
    {
        return CompanyListResource::collection(CompanyList::all());
    }

    public function store(CompanyListRequest $request)
    {
        return new CompanyListResource(CompanyList::create($request->validated()));
    }

    public function show(CompanyList $companyList)
    {
        return new CompanyListResource($companyList);
    }

    public function update(CompanyListRequest $request, CompanyList $companyList)
    {
        $companyList->update($request->validated());

        return new CompanyListResource($companyList);
    }

    public function destroy(CompanyList $companyList)
    {
        $companyList->delete();

        return response()->json();
    }
}
