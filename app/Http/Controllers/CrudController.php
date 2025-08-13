<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cruds = Crud::orderBy("id","desc")->get();
        return view("crud.index", compact("cruds"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("crud.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filepath = null;
        if ($request->hasFile("file_field")) {
            $filepath = $request->file("file_field")->store("upload", 'public');
        }
        Crud::create([
            "text_Field" => $request->text_field,
            "radio_field" => $request->radio_field,
            "checkbox" => $request->checkbox,
            "select_field" => $request->select_field,
            "date_field" => $request->date_field,
            "file_field"=> $filepath,
            "textarea" => $request->textarea,
        ]);
        $cruds = Crud::orderBy("id","desc")->get();
        return view("crud.index", compact('cruds'));
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
