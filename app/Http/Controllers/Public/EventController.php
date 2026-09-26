<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventController extends Controller
{
    /**
     * Display a listing of upcoming and past events.
     */
    public function index(Request $request): View
    {
        $upcomingEvents = Event::active()
            ->upcoming()
            ->get();

        $pastEvents = Event::active()
            ->past()
            ->take(6)
            ->get();

        return view('pages.events.index', [
            'upcomingEvents' => $upcomingEvents,
            'pastEvents' => $pastEvents,
        ]);
    }

    /**
     * Display single event details.
     */
    public function show(string $slug): View
    {
        $event = Event::active()
            ->where('slug', $slug)
            ->firstOrFail();

        $otherEvents = Event::active()
            ->upcoming()
            ->where('id', '!=', $event->id)
            ->take(3)
            ->get();

        return view('pages.events.show', [
            'event' => $event,
            'otherEvents' => $otherEvents,
        ]);
    }
}
