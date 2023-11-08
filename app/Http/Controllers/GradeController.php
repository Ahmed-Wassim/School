<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();
        return view('dashboard.grades.index', compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Grade::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        toast('The grade has been created', 'success');
        return redirect()->route('grade.index');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Grade::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        toast('The grade has been updated', 'success');
        return redirect()->route('grade.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grade = Grade::findOrFail($id);
        $grade->delete();
        toast('The grade has been deleted', 'success');
        return redirect()->route('grade.index');
    }
}
