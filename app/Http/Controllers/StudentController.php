<?php

namespace App\Http\Controllers;

use App\Models\Majore;
use Illuminate\Http\Request;

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
        //
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
        //
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
