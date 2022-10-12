<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcs extends Controller
{
    public function result($num1,$num2)
    {
    echo $num1 + $num2;
        return view('addition.calcs', ['num1' => $num1, 'num2' => $num2]);

        return view('subtraction', ['num1' => $num1, 'num2' => $num2]);
        return view('multiplication', ['num1' => $num1, 'num2' => $num2]);
        return view('division', ['num1' => $num1, 'num2' => $num2]);
    }
}
