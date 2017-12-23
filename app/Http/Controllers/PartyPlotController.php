<?php

namespace App\Http\Controllers;

// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Models\Partyplot;
use App\Models\Category;
//use Backpack\Settings\app\Models\Setting;

class PartyPlotController extends CrudController {

    public function __construct() {
        parent::__construct();
        

        /*
          |--------------------------------------------------------------------------
          | BASIC CRUD INFORMATION
          |--------------------------------------------------------------------------
         */
               
    }
    
    public function setup() {
        parent::setup();
        $this->crud->setModel("App\Models\Partyplot");
        $this->crud->setRoute("party_plot");
        $this->crud->setEntityNameStrings('Party Plot', 'party_plot');
   
    }

    public function index() {

		$partyplotData = Partyplot::where('status', 1)->get();
		$view = array(
			'partyplot'=>$partyplotData
		);
		
        return view('front.owner.partyplot', $this->data);
    }   
	 public function add() {
		
        return view('front.owner.partyplot-add');
    } 

	public function search() {	
        return view('front.party_plot.party-plot-search');
    } 	

	public function list($id) {	

		$partyplotlistData = Partyplot::where('status', 1)->where('category_id', $id)->get();
        $categoryData = Category::where('status', 1)->where('id',$id)->get();
		$view = array(
            'category' => $categoryData,
			'partyplot'=>$partyplotlistData
		);
        return view('front.party_plot.party-plot-list',$view);
    } 	
	
	public function detail($id) {

		$partyplotData = Partyplot::where('status', 1)->where('id', $id)->get();
		$view = array(
			'partyplotdetail'=>$partyplotData
		);
        return view('front.party_plot.party-plot-detail',$view);
    } 	
}
