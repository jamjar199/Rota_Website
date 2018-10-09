<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Event;

class EventController extends Controller
{
	private $roomNumbers = [1,2,3,5,7];
	private $roomNames = [''];

    public function eventsToday()
	{
	    return view('rota/event')
			->with('data', event::where('date', Carbon::today())->get());
	}

	public function eventsByDate($date)
	{
	    return view('rota/event')
			->with('data', event::where('date', $date)->get());
	}

    public function eventInRoomToday($room)
	{
	    if (in_array($room, $this->roomNumbers)) {
	    	return event::where('room_id', $room)->where('date', Carbon::today())->get();
	    } 
	}

	public function eventInRoomByDate($room, $date)
	{
	    if (in_array($room, $this->roomNumbers)) {
	    	return event::where('room_id', $room)->whereBetween('date', [$date, '2019-1-01'])->get();
	    } 
	}
}
