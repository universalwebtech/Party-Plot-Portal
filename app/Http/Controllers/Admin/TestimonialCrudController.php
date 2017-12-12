<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TestimonialRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TestimonialRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Models\Testimonial;
class TestimonialCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Testimonial');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/testimonial');
        $this->crud->setEntityNameStrings('Testimonial', 'Testimonial');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn('name'); // add a text column, at the end of the stack
        $this->crud->addColumn('designation'); // add a single column, at the end of the stack
        
        // -------------------------
        // ------ CRUD FIELDS ------
        // -------------------------

        // ----------
        // SIMPLE tab
        // ----------
        $this->crud->addField([
            'name'  => 'name',
            'label' => 'Name',
            'type'  => 'text',
        ]);

       $this->crud->addField([
			'name' => 'description',
			'label' => trans('backpack::pagemanager.content'),
			'type' => 'wysiwyg',
			'placeholder' => trans('backpack::pagemanager.content_placeholder'),
		]);
		
		$this->crud->addField([
            'name'  => 'designation',
            'label' => 'Designation',
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name'  => 'status',
            'label' => 'Status',
            'type'  => 'select_from_array',
             'options' => ['1' => 'Active', '0' => 'Deactive'],
        ]);

       
		
	    // ------ FILTERS
        //$this->addCustomCrudFilters();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

     public function testimonial()
    {
      
    $testimonialData = Testimonial::where('status', 1)->get();
   
    $view = array(
                  'name'=>$testimonialData
                );
    return view('front.pages.home', $view);
    }   
   

   
}
