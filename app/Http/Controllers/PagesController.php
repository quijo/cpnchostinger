<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Announcement;

class PagesController extends Controller
{

public function welcome()
{
    $announcements = Announcement::where('is_active', true)
        ->orderBy('published_at', 'desc')
        ->take(5)
        ->get();

   $events = Event::where('is_active', true)
    ->orderBy('start_date', 'asc')
    ->take(10)
    ->get()
    ->map(function ($event) {
        return [
            'title' => $event->title,
            'start' => $event->start_date,
            'end' => $event->end_date,
        ];
    });

    return view('welcome', compact('announcements', 'events'));
}


}
