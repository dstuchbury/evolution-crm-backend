<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Company */
class CompanyCollection extends ResourceCollection
{
    public function __construct($resource)
    {
        $this->pagination = [
            'total' => $resource->total(),
            'count' => $resource->count(),
            'per_page' => $resource->perPage(),
            'current_page' => $resource->currentPage(),
            'total_pages' => $resource->lastPage(),
        ];

        $resource = $resource->getCollection();

        parent::__construct($resource);
    }

    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
            'pagination' => $this->pagination,
        ];
    }

    public function with(Request $request)
    {
        return [
            'meta' => [
                'action' => 'list companies',
                'success' => true,
                'user_messages' => [],
            ],
        ];
    }
}
