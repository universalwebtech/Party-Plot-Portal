<?php

namespace App\Http\Controllers;

// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\CRUD\app\Http\Controllers\CrudController;
Use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request AS INPUT_REQUEST;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
 use Validator;
 use App\User;
 use Session;
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
        $this->crud->setModel("App\User");
        $this->crud->setRoute("party_plot");
        $this->crud->setEntityNameStrings('Party Plot', 'party_plot');
   
    }

    public function index() {

		$user_id = Auth::user()->id;
		$party_plot_owner = \App\User::find($user_id);
		
		$this->data['owner_name'] = $party_plot_owner->name;
		$this->data['owner_mobile'] = $party_plot_owner->mobile;
		$this->data['owner_email'] = $party_plot_owner->email;
	
        return view('front.owner.my-account', $this->data);
    }

	
	 public function owner_update()
    {
	
		Global $request;
		
		
		if ($request->isMethod('post')) {
			
		}
		
		
		 $rules = array(
            'name' => 'required|string|max:255',
			'mobile' => 'required|string|max:255',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
			
			Session::flash('alert-error', 'Please enter correct information.');
            return Redirect::to('my-account')->withErrors($validator);
        } else {
            $userId = Auth::user()->id;
			$user = User::find($userId);
			$user->name = Input::get('name');
			$user->mobile = Input::get('mobile');
			$user->save();
			
			Session::flash('alert-success', 'Your information updated successfully!');
			return Redirect::to('my-account');
        }
		
		
	}
	
}
