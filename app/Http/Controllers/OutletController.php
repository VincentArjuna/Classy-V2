<?php

namespace App\Http\Controllers;

use App\Http\Resources\OutletResource;
use App\Models\Outlet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outlets = OutletResource::collection(Outlet::paginate(5));
        return Inertia::render('Outlet/Index', compact('outlets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Outlet/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $error = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'telp_1' => 'required'
        ]);
        Outlet::create([
            'code' => 'O-' . str_pad(Outlet::count() + 1, 5, '0', STR_PAD_LEFT),
            'name' => $request->name,
            'address' => $request->address,
            'telp_1' => $request->telp_1,
            'telp_2' => $request->telp_2,
            'fax' => $request->fax,
            'modified_by' => Auth::id()
        ]);
        return redirect()->route('outlets.index')->with('message', 'Outlet Created Successfully!');
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
    public function edit(Outlet $outlet)
    {
        $modifier = User::find($outlet->modified_by);
        return Inertia::render('Outlet/Edit', compact('outlet', 'modifier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outlet $outlet)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'telp_1' => 'required'
        ]);

        $outlet->update([
            'name' => $request->name,
            'address' => $request->address,
            'telp_1' => $request->telp_1,
            'telp_2' => $request->telp_2,
            'fax' => $request->fax,
            'status' => $request->status,
            'modified_by' => Auth::id()
        ]);

        return redirect()->route('outlets.index')->with('message', 'Outlet Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outlet $outlet)
    {
        $outlet->delete();
        return redirect()->back()->with('message', 'Outlet Deleted Successfully.');
    }
}
