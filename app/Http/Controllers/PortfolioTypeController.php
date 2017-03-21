<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PortfolioType;

class PortfolioTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio_types = PortfolioType::paginate(20);

        return view('backoffice.portfolios.type.index', compact('portfolio_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.portfolios.type.create');
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
            'name' => 'required|unique:portfolio_types',
        ]);

        $portfolio_type = new PortfolioType;

        $portfolio_type->name = $request->name;
        $portfolio_type->slug = slug($request->name);

        $portfolio_type->save();

        alert()->success($portfolio_type->name . ' type was created.', 'Success!');

        return redirect()->route('type.index');
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
        $portfolio_type = PortfolioType::find($id);

        return view('backoffice.portfolios.type.edit', compact('portfolio_type'));
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
            'name' => 'required',
        ]);

        $portfolio_type = PortfolioType::find($id);

        $portfolio_type->name = $request->name;
        $portfolio_type->slug = slug($request->name);

        $portfolio_type->save();

        alert()->success($portfolio_type->name . ' type was updated.', 'Success!');

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
        $portfolio_type = PortfolioType::find($id);

        $portfolio_type->delete();
        
        alert()->success($portfolio_type->name . ' type was deleted.', 'Success!');

        return redirect()->back();
    }
}
