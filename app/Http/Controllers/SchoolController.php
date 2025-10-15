<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function showBeranda()
    {
        $school = School::select('id', 'name', 'location')->get();

        return view('Beranda', ['school' => $school]);
    }

    public function showSekolah()
    {
        $school = School::select('id', 'name', 'logo')->get();

        return view('Sekolah', ['school' => $school]);
    }

    public function showDetailSekolah($id)
    {
        $school = School::select('id', 'logo', 'name', 'location', 'total_student', 'total_meal', 'total_allergy', 'type_allergy')
                        ->where('id', $id)
                        ->firstOrFail();

        return view('DetailSekolah', ['school' => $school]);
    }

}
