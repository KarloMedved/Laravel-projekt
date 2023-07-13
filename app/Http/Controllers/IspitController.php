<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Ispit extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return dd(
            Ispit::all()
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(403);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return dd(
            Ispit::find($id)->getOriginal()
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ispit $ispit)
    {
        return abort("boo");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Ispit::find($id);
        $data-> nekaj = $request("foo");
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
