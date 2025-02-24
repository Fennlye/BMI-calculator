<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMICalculatorController extends Controller
{
    public function index()
    {
        return view('bmi');
    }

    public function calculate(Request $request)
    {
    $request->validate([
        'weight' => 'required|numeric|min:1',
        'height' => 'required|numeric|min:50',
    ]);

    $weight = $request->input('weight');
    $heightInCm = $request->input('height');
    $heightInMeters = $heightInCm / 100;

    $bmi = $weight / ($heightInMeters * $heightInMeters);
    $category = $this->getBMICategory($bmi);

    return view('bmi', compact('bmi', 'category'));
    }


    private function getBMICategory($bmi)
    {
        if ($bmi < 18.5) return "Underweight";
        if ($bmi < 24.9) return "Normal weight";
        if ($bmi < 29.9) return "Overweight";
        return "Obesity";
    }
}
