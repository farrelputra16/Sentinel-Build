<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeNumberController extends Controller
{
    public function index()
    {
        return view('prime');
    }

    public function calculate(Request $request)
    {
        $start = $request->input('start_number');
        $end = $request->input('end_number');

        $primes = $this->getPrimesInRange($start, $end);

        return view('prime', [
            'primes' => $primes,
            'start_number' => $start,
            'end_number' => $end,
        ]);
    }

    private function getPrimesInRange($start, $end)
    {
        $primes = [];
        for ($i = $start; $i <= $end; $i++) {
            if ($this->isPrime($i)) {
                $primes[] = $i;
            }
        }
        return $primes;
    }

    private function isPrime($number)
    {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
