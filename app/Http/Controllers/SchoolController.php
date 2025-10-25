<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function showBeranda()
    {
        $schools = School::select('logo', 'name', 'location', 'total_meal')->get();

        return view('Beranda', ['schools' => $schools]);
    }

    public function showSekolah()
    {
        $school = School::select('id', 'name', 'logo')->get();

        return view('Sekolah', ['school' => $school]);
    }

    public function showDetailSekolah($id)
    {
        $school = School::select('id', 'logo', 'name', 'location', 'total_student', 'total_meal', 'type_allergy')
                        ->where('id', $id)
                        ->firstOrFail();

        return view('DetailSekolah', ['school' => $school]);
    }

    public function updateSekolah(Request $request, $id)
    {
        $school = \App\Models\School::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'total_student' => 'required|integer',
            'total_meal' => 'required|integer',
            'type_allergy' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/logo'), $filename);

            $validated['logo'] = 'uploads/logo/' . $filename;
        } else {
            $validated['logo'] = $school->logo;
        }

        $validated['type_allergy'] = (string) $request->input('type_allergy');

        $school->update($validated);

        return redirect('/sekolah')->with('success', 'Data sekolah berhasil diperbarui!');
    }

    public function create()
    {
        return view('TambahSekolah');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'total_student' => 'required|integer',
            'total_meal' => 'required|integer',
            'type_allergy' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/logo'), $filename);
            $validated['logo'] = 'uploads/logo/' . $filename;
        } else {
            $validated['logo'] = 'uploads/logo/default.jpg';
        }

        $validated['type_allergy'] = (string) $request->input('type_allergy');

        \App\Models\School::create($validated);

        return redirect('/sekolah')->with('success', 'Sekolah berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $school = \App\Models\School::findOrFail($id);

        // Optional: hapus logo dari folder kalau bukan default
        if ($school->logo && $school->logo !== 'uploads/logo/default.png' && file_exists(public_path($school->logo))) {
            unlink(public_path($school->logo));
        }

        $school->delete();

        return response()->json(['message' => 'Data sekolah berhasil dihapus.'], 200);
    }
}
