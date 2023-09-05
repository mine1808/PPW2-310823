<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $result = 0;
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operator = $request->input('operator');

        if ($operator == 'add') {
            $result = $num1 + $num2;
        } elseif ($operator == 'subtract') {
            $result = $num1 - $num2;
        } elseif ($operator == 'multiply') {
            $result = $num1 * $num2;
        } elseif ($operator == 'divide') {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                return redirect()->route('calculator')->with('error', 'Tidak dapat membagi dengan nol.');
            }
        }

        return view('calculator', ['result' => $result]);
    }
}
