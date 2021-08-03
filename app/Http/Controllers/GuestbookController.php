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
        $user = Auth()->user();
        $isCreator = 0;
        $isSigned = 0;
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
                if($user->id==$event->creator_id){
                    $isCreator=1;
                }else{
                    
                    $exist = $user->sign->where('id',$request->eventId)->first();
                    if($exist){
                        $isSigned=1;
                    }
                }
            }else{
                $message="NOT FOUND";
            }
        }
        return view('sign', ['exist'=>$exist,'isSigned'=>$isSigned,'isCreator'=>$isCreator, 'user'=>$user, 'event'=>$event, 'eventId'=>$eventId, 'message'=>$message, 'acceptance'=>$acceptance]);
    }

    public function create(Request $request){
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
        ]);
        // dd($request->description);
        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'creator_id' => Auth::user()->id,
        ]);
        return redirect()->back();
    }

    public function updateGB(Request $request){
        $this->validate($request,[
            'title' => ['required', 'string', 'max:255'],
        ]);
        $user = Auth()->user();
        $my_event = $user->event;
        $exist = $my_event->where('id',$request->eventId)->first();
        if($exist){
            Event::where('id',$request->eventId)->update([
                'title' => $request->title,
                'description' =>  $request->description,
            ]);
        }
        return redirect()->back();        
    }

    public function sign(Request $request){
        $this->validate($request, [
            'address' => ['required', 'string', 'max:70'],
            'message' => ['required', 'string', 'max:150'],
        ]);
        Sign::create([
            'address' => $request->address,
            'message' => $request->message,
            'signer_id' => Auth()->user()->id,
            'event_id' => $request->eventId,
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
