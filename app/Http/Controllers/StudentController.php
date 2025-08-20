<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Majore;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pendaftaran_web.student.dashboard");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majores = Majore::orderBy("majores_name")->get();
        return view("pendaftaran_web.instructor.manage_students.create", compact("majores"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_lengkap' => 'required',
            'id_majore' => 'required',
            'nik' => 'required',
            'kartu_keluarga' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'nama_sekolah' => 'required',
            'kejuruan' => 'required',
            'nomor_hp' => 'required',
            'email' => 'required',
            'aktivitas_saat_ini' => 'nullable',
            'status' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        Student::create($request->all());

        return redirect()->route('student.instructor');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $student = Student::findOrFail($id);
        // return view('', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
