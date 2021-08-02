<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class GuestbookController extends Controller
{
    //
    public function search(Request $request)
    {
        $eventId = $request->eventId;
        $event = Event::where('id','=',$eventId)->get();
        return view('sign', ['event' => $event,'eventId'=>$eventId]);
    }
}
