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
        $school = School::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'total_student' => 'required|integer',
            'total_meal' => 'required|integer',
            'type_allergy' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Jika ada logo baru
        if ($request->hasFile('logo')) {
            // Hapus logo lama jika ada
            if ($school->logo && file_exists(public_path($school->logo))) {
                unlink(public_path($school->logo));
            }

            $file = $request->file('logo');
            $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/logo'), $filename);

            $validated['logo'] = 'uploads/logo/' . $filename;
        }

        $school->update($validated);

        return response()->json(['message' => 'Data berhasil diperbarui']);
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

        // Upload logo jika ada
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/logo'), $filename);
            $validated['logo'] = 'uploads/logo/' . $filename;
        } else {
            $validated['logo'] = 'uploads/logo/default.png';
        }

        $validated['type_allergy'] = (string) $request->input('type_allergy');

        // Simpan ke database
        \App\Models\School::create($validated);

        // 🔁 Redirect kembali ke halaman /sekolah setelah berhasil
        return redirect('/sekolah')->with('success', 'Sekolah berhasil ditambahkan!');
    }
}
