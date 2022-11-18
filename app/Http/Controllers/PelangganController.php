<?php

namespace App\Http\Controllers;

use App\Http\Resources\PelangganResource;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use PhpParser\Node\Stmt\Return_;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggans = PelangganResource::collection(Pelanggan::paginate(5));
        return Inertia::render('Pelanggan/Index', compact('pelanggans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Pelanggan/Create');
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
            'phone' => 'required',
            'birth_date' => 'date|nullable',
            'email' => 'email|nullable'
        ]);

        Pelanggan::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'birth_date' => $request->birth_date,
            'address' => $request->address,
            'id_number' => $request->id_number,
            'id_type' => $request->id_type,
            'email' => $request->email,
            'modified_by' => Auth::id()
        ]);

        return redirect()->route('pelanggans.index')->with('message', 'Pelanggan Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        $modifier = User::find($pelanggan->modified_by);
        return Inertia::render('Pelanggan/Edit', compact('pelanggan', 'modifier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'birth_date' => 'date|nullable',
            'email' => 'email|nullable'
        ]);
        $pelanggan->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'birth_date' => $request->birth_date,
            'address' => $request->address,
            'id_number' => $request->id_number,
            'id_type' => $request->id_type,
            'email' => $request->email,
            'status' => $request->status,
            'modified_by' => Auth::id()
        ]);

        return redirect()->route('pelanggans.index')->with('message', 'Parfum Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect()->back()->with('message', 'Pelanggan Deleted Successfully.');
    }
}
