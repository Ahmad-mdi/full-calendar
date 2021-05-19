<?php

namespace App\Http\Controllers;

use App\Models\Event;
use http\Env\Response;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function loadEvents(): \Illuminate\Http\JsonResponse
    {
        $events = Event::all();
        return response()->json($events);
    }

    public function update(Request $request): \Illuminate\Http\JsonResponse
    {
        $event = Event::query()->where('id', $request->id)->firstOrFail();
        $event->fill($request->all());
        $event->save();
        return response()->json(true);
    }

    public function store(Request $request)
    {
        Event::query()->create($request->all());
        return response()->json(true);
    }
}
