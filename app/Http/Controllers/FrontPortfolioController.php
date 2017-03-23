<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PortfolioType, App\Portfolio;

class FrontPortfolioController extends Controller
{
    public function index() {
    	$portfolio_types = PortfolioType::all();
    	$portfolios = Portfolio::OrderBy('year', 'DESC')->get();

        $meta = [
            'title' => 'Portfolio',
        ];

    	return view('portfolios', [
    		'portfolio_types' => $portfolio_types,
    		'portfolios' => $portfolios,
            'meta' => $meta,
    	]);
    }

    public function getPortfolio($slug) {
    	$portfolio = Portfolio::whereSlug($slug)->first();

        $meta = [
            'title' => $portfolio->name,
            'description' => $portfolio->description,
            'image' => 'uploads/portfolio_cover_images/'.$portfolio->cover_img,
        ];

    	return view('portfolio', ['portfolio' => $portfolio, 'meta' => $meta,]);
    }
}
