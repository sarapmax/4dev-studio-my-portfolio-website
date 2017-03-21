<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PortfolioType, App\Portfolio;

class FrontPortfolioController extends Controller
{
    public function index() {
    	$portfolio_types = PortfolioType::all();
    	$portfolios = Portfolio::OrderBy('year', 'DESC')->get();

    	return view('portfolios', [
    		'portfolio_types' => $portfolio_types,
    		'portfolios' => $portfolios,
    	]);
    }

    public function getPortfolio($slug) {
    	$portfolio = Portfolio::whereSlug($slug)->first();

    	return view('portfolio', ['portfolio' => $portfolio]);
    }
}
