<?php

namespace App\Http\Controllers;

use App\Events\Property\PropertyApprovedEvent;
use App\Events\Property\PropertyCreatedEvent;
use App\Http\Requests\CreatePropertyRequest;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PropertyController extends Controller
{
    /**
     * @param CreatePropertyRequest $request
     * @return View
     */
    public function store(CreatePropertyRequest $request)
    {
        $property = Property::query()->create($request->all());

        event(new PropertyCreatedEvent(auth()->user(), $property->id));

        return view('property.index')
            ->with('success_message', trans('property.created'));
    }

    /**
     * @param int $propertyId
     * @param Request $request
     * @return View
     */
    public function approve(int $propertyId, Request $request)
    {
        $property = Property::query()->findOrFail($propertyId);

        $property->update(['approved' => (bool)$request->only('approved')]);

        event(new PropertyApprovedEvent($property->user_id, $propertyId));

        return view('property.index')
            ->with('success_message', trans('property.approved'));
    }
}
