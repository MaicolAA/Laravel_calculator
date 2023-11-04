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
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $operator = $request->input('operator');

    $result = 0;

    switch ($operator) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            $result = $num2 != 0 ? $num1 / $num2 : 'Error: Division by zero';
            break;
    }

    return view('calculator', ['result' => $result]);
}

}
