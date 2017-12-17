<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Partyplot;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$sliderData = Slider::where('status', 1)->get();
		$partyplotData = Partyplot::where('status', 1)->get();
		$categoryData = Category::where('status', 1)->where('display_on_home',1)->get();
		$testimonialData = Testimonial::where('status', 1)->get();
		
		$view = array(
			'slider' => $sliderData,
			'partyplot'=>$partyplotData,
			'category' => $categoryData,
			'testimonial' => $testimonialData
		);
		//return view('front.pages.home', $view);
        return view('front.pages.home', $view);
    }
}
