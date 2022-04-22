<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(Request $request)
    {
        $output = [];

        foreach (range(1, 100) as $i) {
            $output[] = $this->output($i);
        }

        return view('welcome')->with('output', $output); ;
    }

    public function output($num) {

        if ( $num % 15 == 0 ) {
            return "FizzBuzz";
        }

        if ( $num % 3 == 0 ) {
            return "Fizz";
        }

        if ( $num % 5 == 0 ) {
            return "Buzz";
        }

        return strval($num);
    }


}
