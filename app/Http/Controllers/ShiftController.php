<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Shift;

class ShiftController extends Controller
{
	public function shiftsByWeek($name)
	{
		$shiftData = Shift::where('person', $name)
			->whereBetween('date', [Carbon::today(), '2019-1-01'])->get();

		return view('rota/name')
			->with('data', ShiftController::formatDate($shiftData));
	}

	public function shiftsByDate($name, $date)
	{
		$shiftData = Shift::where('person', $name)
			->whereBetween('date', [$date, '2019-1-01'])->get();

		return view('rota/name')
			->with('data', ShiftController::formatDate($shiftData));
	}

	private function formatDate($shiftData)
	{
		foreach ($shiftData as $shift) { 
			$shift->date = Carbon::parse($shift->date, 'UTC')->toFormattedDateString();
		}

		return $shiftData;
	}

}
