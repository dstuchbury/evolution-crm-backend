<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Responses\WebResponse;

class CompanyController extends Controller
{
    public function index()
    {
        return CompanyResource::collection(Company::with('companyType')->get());
    }

    public function store(CompanyRequest $request)
    {
        return new CompanyResource(Company::create($request->validated()));
    }

    public function show(Company $company)
    {
        if ($company === null) {
            return WebResponse::returnNotFound();
        }
        $company->load([
            'contacts', 'activities', 'companyType', 'companyLists', 'addresses'
        ]);

//        return new CompanyResource($company);

        return WebResponse::respondOk(
            'show_company',
            null,
            new CompanyResource($company),
        );
    }

    public function update(CompanyRequest $request, Company $company)
    {
        $company->update($request->validated());

        return new CompanyResource($company);
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return response()->json();
    }
}
