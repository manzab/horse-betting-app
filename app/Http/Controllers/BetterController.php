<?php

namespace App\Http\Controllers;

use App\Models\Better;
use App\Models\Horse;
use Illuminate\Http\Request;

class BetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('betters.index', ['betters' => Better::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('betters.create', ['horses' => Horse::all()]);
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
            'name' => 'required',
            'surname' => 'required',
            'bet',
            'horse_id'
        ]);
        return Better::create($request->all()) ?
            redirect('/betters')->with('status_success', 'Better created!') :
            redirect('/betters')->with('status_error', 'Better was not created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Better  $better
     * @return \Illuminate\Http\Response
     */
    public function show(Better $better)
    {
        return view('betters.show_better', compact('better'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Better  $better
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('betters.edit', ['better' => Better::find($id), 'horses' => Horse::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Better  $better
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Better $better)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'bet',
            'horse_id'
        ]);
        return $better->update($request->all()) ?
            redirect('/betters')->with('status_success', 'Better updated!') :
            redirect('/betters')->with('status_error', 'Better was not updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Better  $better
     * @return \Illuminate\Http\Response
     */
    public function destroy(Better $better)
    {
        $better->delete();
        return redirect('/betters')->with('status_success', 'Better deleted!');
    }
}
