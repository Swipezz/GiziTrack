<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SurveyFood;
use App\Models\SurveyAllergy;

class SurveyController extends Controller
{
    public function showSurveyMakanan()
    {
        return view('SurveyMakanan');
    }

    public function surveyMakanan(Request $request)
    {
        $school = $request->input('school');
        $foods = $request->input('food');
        $totals = $request->input('total');

        if (!$school) {
            return back()->with('error', 'Nama sekolah harus diisi.');
        }

        for ($i = 0; $i < count($foods); $i++) {
            $food = trim($foods[$i]);
            $total = trim($totals[$i]);

            if ($food === '' || $total === '') {
                continue;
            }

            SurveyFood::create([
                'school' => $school,
                'food'   => $food,
                'total'  => (int)$total,
            ]);
        }

        return redirect()->route('surveyMakanan');
    }

        public function showSurveyAlergi()
    {
        return view('SurveyAlergi');
    }

    public function surveyAlergi(Request $request)
    {
        $school = $request->input('school');
        $allergy = $request->input('allergy');

        if (!$school) {
            return back()->with('error', 'Nama sekolah harus diisi.');
        }

        SurveyAllergy::create([
            'school' => $school,
            'allergy' => $allergy,
        ]);

        return redirect()->route('surveyAlergi');
    }
}