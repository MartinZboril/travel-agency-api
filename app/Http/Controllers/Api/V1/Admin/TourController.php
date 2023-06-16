<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourRequest;
use App\Http\Resources\TourResource;
use App\Models\Travel;

class TourController extends Controller
{
    /**
     * POST Tour
     *
     * Creates a new Tour record.
     *
     * @authenticated
     *
     * @response {"data":{"id":"996c6462-7c18-4b64-bf71-4d6832240b62","name":"Tour for travel 234","slug":"tour-for-travel-234", ...}
     * @response 422 {"message":"The name field is required.","errors":{"name":["The name field is required."]}}
     */
    public function store(Travel $travel, TourRequest $request)
    {
        $tour = $travel->tours()->create($request->validated());

        return new TourResource($tour);
    }
}
