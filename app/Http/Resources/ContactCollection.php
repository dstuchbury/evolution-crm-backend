<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Contact */
class ContactCollection extends ResourceCollection
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

    public function with(Request $request): array
    {
        return [
            'meta' => [
                'action' => 'list contacts',
                'success' => true,
                'user_messages' => [],
            ],
        ];
    }
}
