<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParfumResource;
use App\Models\Parfum;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ParfumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parfums = ParfumResource::collection(Parfum::paginate(5));
        return Inertia::render('Parfum/Index', compact('parfums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Parfum/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Parfum::create([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'modified_by' => Auth::id()
        ]);

        return redirect()->route('parfums.index')->with('message', 'Parfum Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Parfum $parfum)
    {
        $modifier = User::find($parfum->modified_by);
        return Inertia::render('Parfum/Edit', compact('parfum', 'modifier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parfum $parfum)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $parfum->update([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'status' => $request->status,
            'modified_by' => Auth::id()
        ]);

        return redirect()->route('parfums.index')->with('message', 'Parfum Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parfum $parfum)
    {
        $parfum->delete();
        return redirect()->back()->with('message', 'Parfum Deleted Successfully.');
    }
}
