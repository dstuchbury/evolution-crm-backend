<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyCollection;
use App\Models\Company;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Responses\WebResponse;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        $paginate = $request->get('paginate') ?? 10;
        return new CompanyCollection(CompanyResource::collection(Company::with('companyType')->paginate($paginate)));
    }

    public function store(CompanyRequest $request)
    {
        return new CompanyResource(Company::create($request->validated()));
    }

    public function show(Company $company)
    {
        $company->load([
            'contacts', 'activities.contacts', 'companyType', 'companyLists', 'addresses'
        ]);

        return WebResponse::respondOk(
            'show company',
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
