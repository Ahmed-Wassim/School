<?php

namespace App\Http\Controllers;

use App\Models\ParentModel;
use Illuminate\Http\Request;
use App\Http\Requests\ParentRequest;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parents = ParentModel::all();
        return view('dashboard.parent.index', compact('parents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.parent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParentRequest $request)
    {
        ParentModel::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fname' => $request->fname,
            'lname' => $request->lname,
            'national_id' => $request->national_id,
            'dob' => $request->dob,
            'phone' => $request->phone
        ]);

        toast('The parent has been created', 'success');
        return redirect()->route('parent.index');
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
        $parent = ParentModel::findOrFail($id);
        return view('dashboard.parent.edit', compact('parent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        ParentModel::findOrFail($id)->update([
            'email' => $request->email,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'national_id' => $request->national_id,
            'dob' => $request->dob,
            'phone' => $request->phone
        ]);

        toast('The parent has been updated', 'success');
        return redirect()->route('parent.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $parent = ParentModel::findOrFail($id);
        $parent->delete();
        toast('The parent has been deleted', 'success');
        return redirect()->route('parent.index');
    }
}
