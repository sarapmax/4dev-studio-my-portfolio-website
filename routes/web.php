<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
	File::put('supersonic/js/second-graph-data.json', App\Experience::orderBy('year', 'ASC')->get());
	File::put('supersonic/js/graph-data.json', App\Skill::all());

    return view('about');
});

Route::get('portfolios', 'FrontPortfolioController@index');

Route::get('portfolio/{slug}', 'FrontPortfolioController@getPortfolio');

Route::get('contact', function () {
    return view('contact');
});

Route::get('blogs', function () {
    return view('blogs');
});

Route::get('blogs/open', function() {
	return view('blog_open');
});

Route::post('contact', 'ContactController@postContact');



//============= Backoffice =============//

Route::get('backoffice/login', 'AdminAuthController@getLogin');

Route::post('backoffice/login', 'AdminAuthController@postLogin');

Route::group(['middleware' => 'admin'], function() {
	Route::get('backoffice/logout', 'AdminAuthController@getLogout');

	Route::resource('backoffice/portfolios/portfolio', 'PortfolioController');
	
	Route::resource('backoffice/portfolios/type', 'PortfolioTypeController');

	Route::resource('backoffice/blogs/blog', 'BlogController');

	Route::resource('backoffice/blogs/tag', 'TagController');

	Route::post('upload_image', 'BlogController@uploadImage'); // uplod image from ckeditor

	Route::resource('backoffice/skill', 'SkillController');

	Route::resource('backoffice/experience', 'ExperienceController');

	Route::get('backoffice/api/get_skill', 'SkillController@getSkillJson');

	Route::get('backoffice/api/get_experience', 'SkillController@getExperienceJson');

	Route::get('backoffice/contact', 'ContactController@getContact');
	
	Route::get('backoffice/read_contact/{contact_id}', 'ContactController@readContact');
	
	Route::get('backoffice/destroy_contact/{contact_id}', 'ContactController@destroyContact');
	
	Route::get('backoffice', function() {
		return view('backoffice.home');
	});
});

