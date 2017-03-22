<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience, App\Skill;
use File;

class HomeController extends Controller
{
    public function getHomePage() {
    	return view('home');
    }

    public function getAboutPage() {
    	
		File::put('supersonic/js/second-graph-data.json', Experience::orderBy('year', 'ASC')->get());
		File::put('supersonic/js/graph-data.json', Skill::all());

	    return view('about');
    }
}
