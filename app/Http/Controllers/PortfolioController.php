<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio, App\PortfolioImage, App\PortfolioType;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $portfolio_types;

    public function __construct() {
        $this->portfolio_types = PortfolioType::all();
    }

    public function index()
    {
        $portfolios = Portfolio::orderBy('year', 'DESC')->paginate(20);

        return view('backoffice.portfolios.portfolio.index', [
            'portfolios' => $portfolios,
            'portfolio_types' => $this->portfolio_types,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.portfolios.portfolio.create', ['portfolio_types' => $this->portfolio_types]);
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
            'portfolio_type_id' => 'required',
            'name' => 'required|unique:portfolios',
            'cover_img' => 'required',
            'description' => 'required',
            'client' => 'required',
            'services' => 'required',
            'year' => 'required',
            'website' => 'url',
            'dev_icons' => 'required',
            'images.*' => 'required',
        ]);

        $portfolio = new Portfolio;

        if($request->hasFile('cover_img')) {
            $cover_img_file = $request->file('cover_img');
            $cover_img_file_name = 'portfolio_cover_img_'. time() . '_' . $cover_img_file->getClientOriginalName();

            $cover_img_file->move('uploads/portfolio_cover_images/', $cover_img_file_name);

            $portfolio->cover_img = $cover_img_file_name;
        }

        $portfolio->portfolio_type_id = $request->portfolio_type_id;
        $portfolio->name = $request->name;
        $portfolio->description = $request->description;
        $portfolio->client = $request->client;
        $portfolio->services = $request->services;
        $portfolio->year = $request->year;
        $portfolio->website = $request->website;
        $portfolio->dev_icons = $request->dev_icons;
        $portfolio->slug = slug($request->name);

        $portfolio->save();


        if($request->hasFile('images')) {
            $images = $request->file('images');
            foreach($images as $image) {

                $portfolio_image = new PortfolioImage;

                $image_name = 'portfolio_img_'. time() . '_' . $image->getClientOriginalName();

                $image->move('uploads/portfolio_images/', $image_name); 

                $portfolio_image->portfolio_id = $portfolio->id;
                $portfolio_image->image = $image_name;
                $portfolio_image->save();
            }
        }

        alert()->success($portfolio->name . ' project was created.', 'Success!');

        return redirect()->route('portfolio.index');
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
        $portfolio = Portfolio::find($id);

        return view('backoffice.portfolios.portfolio.edit', [
            'portfolio' => $portfolio,
            'portfolio_types' => $this->portfolio_types,
            ]);
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
            'portfolio_type_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'client' => 'required',
            'services' => 'required',
            'year' => 'required',
            'website' => 'url',
            'dev_icons' => 'required',
        ]);

        $portfolio = Portfolio::find($id);

        if($request->hasFile('cover_img')) {
            $cover_img_destination_path = 'uploads/portfolio_cover_images/';

            unlink($cover_img_destination_path . '' . $portfolio->cover_img);

            $cover_img_file = $request->file('cover_img');
            $cover_img_file_name = 'portfolio_cover_img_'. time() . '_' . $cover_img_file->getClientOriginalName();

            $cover_img_file->move($cover_img_destination_path, $cover_img_file_name);

            $portfolio->cover_img = $cover_img_file_name;
        }

        $portfolio_type_id = $request->portfolio_type_id;
        $portfolio->name = $request->name;
        $portfolio->description = $request->description;
        $portfolio->client = $request->client;
        $portfolio->services = $request->services;
        $portfolio->year = $request->year;
        $portfolio->website = $request->website;
        $portfolio->dev_icons = $request->dev_icons;
        $portfolio->slug = slug($request->name);

        $portfolio->save();


        if($request->hasFile('images')) {
            $images_destination_path = 'uploads/portfolio_images/';

            if($portfolio->portfolio_image) {
                foreach($portfolio->portfolio_image as $image) {
                    unlink($images_destination_path . '' . $image->image);

                    $image->delete();
                }
            }

            $images = $request->file('images');
            foreach($images as $image) {

                $portfolio_image = new PortfolioImage;

                $image_name = 'portfolio_img_'. time() . '_' . $image->getClientOriginalName();

                $image->move($images_destination_path, $image_name); 

                $portfolio_image->portfolio_id = $portfolio->id;
                $portfolio_image->image = $image_name;
                $portfolio_image->save();
            }
        }

        alert()->success($portfolio->name . ' project was updated.', 'Success!');

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
        $portfolio = Portfolio::find($id);

        if($portfolio->cover_img) {
            unlink('uploads/portfolio_cover_images/' . $portfolio->cover_img);
        }

        if($portfolio->portfolio_image) {
            foreach($portfolio->portfolio_image as $image) {
                unlink('uploads/portfolio_images/' . $image->image);

                $image->delete();
            }
        }

        $portfolio->delete();

        alert()->success($portfolio->name . ' project was deleted.', 'Success!');

        return redirect()->back();
    }
}
