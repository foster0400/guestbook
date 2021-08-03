<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Event;
use App\Sign;


class GuestbookController extends Controller
{
    //
    public function search(Request $request)
    {
        $user = Auth()->user;
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
        return view('sign', ['user' => $user,'event' => $event,'eventId'=>$eventId,'message'=>$message,'acceptance'=>$acceptance]);
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
//new
    public function viewAll(){
        $myEvents = Event::where('creator_id',Auth()->user()->id);
    }

    public function viewGB($id){
        $event = Event::where('id',$id)->first;
        $guest = Sign::where('event_id',$id)->paginate(10);
    }

    public function myProfile(){
        $my = Auth()->user();
        return view('profile', ['my' => $my]);
    }
    public function updateProfile(Request $request){
        $this->validate($request, [
            'address' => ['string', 'max:100'],
        ]);
        // User::where(update([

        // ])
    }
}
