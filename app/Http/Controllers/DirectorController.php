<?php

namespace App\Http\Controllers;

use App\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = Director::orderBy('name')->paginate(6);

        return view('directors.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:directors']
        ]);

        Director::create([
            'name' => $validatedData['name']
        ]);

        return redirect('directors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $director)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        //
    }
}
