<?php

namespace App\Http\Controllers;

use App\Models\Horse;
use Illuminate\Http\Request;

class HorseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('horses.index', ['horses' => Horse::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required|unique:horses,name',
            'runs' => 'required|gte:wins',
            'wins' => 'required',
            'about'
        ]);
        return Horse::create($request->all()) ?
            redirect('/horses')->with('status_success', 'Horse created!') :
            redirect('/horses')->with('status_error', 'Horse was not created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function show(Horse $horse)
    {
        return view('horses.show_horse', compact('horse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function edit(Horse $horse)
    {
        return view('horses.edit', compact('horse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horse $horse)
    {
        $this->validate($request, [
            'name' => 'required|unique:horses,name, '.$horse->id.',id',
            'runs' => 'required|gte:wins',
            'wins' => 'required',
            'about'
        ]);
        return $horse->update($request->all()) ?
            redirect('/horses')->with('status_success', 'Horse updated!') :
            redirect('/horses')->with('status_error', 'Horse was not updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horse  $horse
     * @return \Illuminate\Http\Response
     */


    public function destroy(Horse $horse)
    {
        $horse->delete();
        return redirect('/horses')->with('status_success', 'Horse deleted!');
    }
}
