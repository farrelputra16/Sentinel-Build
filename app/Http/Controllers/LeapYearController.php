<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeapYearController extends Controller
{
    public function index()
    {
        return view('leap_year');
    }

    public function calculate(Request $request)
    {
        $startYear = $request->input('start_year');
        $endYear = $request->input('end_year');
        $leapYears = $this->getLeapYears($startYear, $endYear);

        return view('leap_year', ['leapYears' => $leapYears, 'startYear' => $startYear, 'endYear' => $endYear]);
    }

    private function getLeapYears($startYear, $endYear)
    {
        $leapYears = [];
        for ($year = $startYear; $year <= $endYear; $year++) {
            if ($this->isLeapYear($year)) {
                $leapYears[] = $year;
            }
        }
        return $leapYears;
    }

    private function isLeapYear($year)
    {
        if ($year % 400 == 0) {
            return true;
        }
        if ($year % 100 == 0) {
            return false;
        }
        if ($year % 4 == 0) {
            return true;
        }
        return false;
    }
}

