<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomePage() {
    	return view('home');
    }

    public function getAboutPage() {
    	
		File::put('supersonic/js/second-graph-data.json', App\Experience::orderBy('year', 'ASC')->get());
		File::put('supersonic/js/graph-data.json', App\Skill::all());

	    return view('about');
    }
}
