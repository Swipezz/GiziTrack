<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SurveyAllergy;


class SurveyController extends Controller
{
    public function showSurveyMakanan()
    {
        return view('SurveyMakanan');
    }

    public function surveyMakanan(Request $request)
    {
        $request->validate([
            'sekolah' => 'required|string',
            'makanan' => 'required|array',
            'total' => 'required|array',
            'makanan.*' => 'required|string',
            'total.*' => 'required|integer',
        ]);

        foreach ($request->makanan as $index => $foodName) {
            SurveyFood::create([
                'school' => $request->sekolah,
                'food' => $foodName,
                'total' => $request->total[$index] ?? 0,
            ]);
        }

        return redirect('/beranda')->with('success', 'Survey berhasil dikirim!');
    }

        public function showSurveyAlergi()
    {
        return view('SurveyAlergi');
    }

    public function surveyAlergi(Request $request)
    {
        $request->validate([
            'sekolah' => 'required|string',
            'alergi' => 'required|string',
        ]);

        SurveyAllergy::create([
            'school' => $request->sekolah,
            'allergy' => $request->alergi,
        ]);

        return redirect('/beranda')->with('success', 'Survey alergi berhasil dikirim!');
    }

}