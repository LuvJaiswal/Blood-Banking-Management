<?php

namespace App\Modules\Event\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Event\Event;
use App\Modules\Event\Repositories\EventsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class EventsController extends Controller
{
    protected $events;

    /**
     * EventsController constructor.
     * @param EventsRepository $eventsRepository
     */
    public function __construct(EventsRepository $eventsRepository)
    {
        $this->events = $eventsRepository;
    }

    public function index()
    {
        $upcomingEvents = $this->events->getUpcomingEvents();
        $pastEvents = $this->events->getPastEvents();
        $eventsNearMe= $this->events->eventsNearMe();

        return view('event/event-list')
            ->with('eventsNearMe', $eventsNearMe)
            ->with('upcomingEvents', $upcomingEvents)
            ->with('pastEvents', $pastEvents);
    }

    public function view(Event $event)
    {
        return view('event.event-view')
            ->with('event', $event);
    }

    public function add()
    {
        return view('event.event-add');
    }
    public function nearby()
    {
        return view('event.nearbylocation');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'address' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'lat' => 'required',
            'lng' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $attributes = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'address' => $request->input('address'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'lat' => $request->input('lat'),
            'lng' => $request->input('lng'),
            'user_id' => $request->user()->id,
            'slug' => Str::slug($request->input('title')),
        ];

        $this->events->create($attributes);

        return redirect()->route('events');
    }
}