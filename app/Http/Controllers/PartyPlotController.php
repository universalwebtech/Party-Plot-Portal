<?php

namespace App\Http\Controllers;

// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Models\Partyplot;
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
	 public function party_plot_add() {
		
        return view('front.owner.partyplot-add');
    }   

	
}
