<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Event;

class GuestbookController extends Controller
{
    //
    public function search(Request $request)
    {
        $eventId = $request->eventId;
        $event=NULL;
        $message=NULL;
        $acceptance=NULL;
        // if user has input eventId
        if($eventId){
            $event = Event::where('id','=',$eventId)->first();
            #check inputted eventId exist or not
            if($event){
                $acceptance=$event->isOpened;
            }else{
                $message="NOT FOUND";
            }
        }
        return view('sign', ['event' => $event,'eventId'=>$eventId,'message'=>$message,'acceptance'=>$acceptance]);
    }
    public function create(Request $request){
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
        ]);
        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'creator_id' => Auth::user()->id,
        ]);
        return redirect()->back();
    }
}
