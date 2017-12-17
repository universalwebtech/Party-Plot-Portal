<?php

namespace App\Http\Controllers;

// VALIDATION: change the requests to match your own file names if you need form validation

use Backpack\PermissionManager\app\Http\Controllers\UserCrudController;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Request as InputRequest;
use Illuminate\Support\Facades\Auth;
use Devio\Pipedrive\Pipedrive;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use App\User;
//use Backpack\Settings\app\Models\Setting;

class PartyPlotOwnerController extends UserCrudController {

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
        $this->crud->setModel("App\User");
        $this->crud->setRoute("my-account");
        $this->crud->setEntityNameStrings('My Account', 'my-account');
   
    }

    public function index() {

		$user_id = Auth::user()->id;
		$party_plot_owner = \App\User::find($user_id);
	
		$this->data['party_plot_owner'] = $party_plot_owner;
	
        return view('front.owner.my-account', $this->data);
    }

  
	public function updatePreference()
	{
		Global $request;
		$userId = Auth::user()->id;
		$user = User::find($userId);
		$preferenceArr = json_decode($user->preferences);
		if(count($preferenceArr) > 0)
		{
			if(isset($preferenceArr->recurring) && $preferenceArr->recurring == 'on'){
				$preferenceArr->recurring = 'off';
			}else if(isset($preferenceArr->recurring) && $preferenceArr->recurring == 'off'){
				$preferenceArr->recurring = 'on';
			}else{
				$preferenceArr->recurring = 'on';
			}
		}else{
			$preferenceArr['recurring'] = 'on';
		}
		$user->preferences = json_encode($preferenceArr);
		$user->save();
		$request->session()->flash('alert-success', 'Recurring setting changed successfully.');
		return \Redirect::to('salesperson/'.$userId.'/edit');
	}

}
