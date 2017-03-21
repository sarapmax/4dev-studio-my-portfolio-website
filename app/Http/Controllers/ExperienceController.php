<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use File;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::paginate(20);

        return view('backoffice.experience.index', ['experiences' => $experiences]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.experience.create');
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
            'title' => 'required|unique:experiences',
            'year' => 'required',
            'subtitle' => 'required',
        ]);

        $experience = new Experience;

        $experience->name = $request->title;
        $experience->title = $request->title;
        $experience->year = $request->year;
        $experience->value = 50;
        $experience->subtitle = $request->subtitle;
        $experience->text = $request->text;

        $experience->save();

        alert()->success('Experience was added', 'Scuccess!');

        return redirect()->route('experience.index');
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
    public function edit($id)
    {
        $experience = Experience::find($id);

        return view('backoffice.experience.edit', ['experience' => $experience]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'year' => 'required',
            'subtitle' => 'required',
        ]);

        $experience = Experience::find($id);

        $experience->name = $experience->id;
        $experience->title = $request->title;
        $experience->year = $request->year;
        $experience->subtitle = $request->subtitle;
        $experience->text = $request->text;

        $experience->save();

        alert()->success('Experience was updated', 'Scuccess!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = Experience::find($id);

        $experience->delete();
        
        alert()->success('Experience was deleted', 'Scuccess!');

        return redirect()->back();
    }

    public function getExperienceJson() {
        return Experience::all();
    }
}
