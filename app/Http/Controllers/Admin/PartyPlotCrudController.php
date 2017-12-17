<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PartyplotRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PartyplotRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Models\Partyplot;

class PartyplotCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Partyplot');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/partyplot');
        $this->crud->setEntityNameStrings('Partyplot', 'Partyplot');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn('name'); // add a text column, at the end of the stack
        $this->crud->addColumn('ideal_for'); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

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
            'name'  => 'address',
            'label' => 'Address',
            'type'  => 'textarea',
        ]);

        $this->crud->addField([
            'name'  => 'ideal_for',
            'label' => 'Ideal For',
            'type'  => 'select_from_array',
            'options' => ['Birthday Party' => 'Birthday Party', 'Engagement' => 'Engagement', 'Fresher Party' => 'Fresher Party', 'Kitty Party' => 'Kitty Party', 'Anniversary' => 'Anniversary', 'Baby Shower' => 'Baby Shower', 'Farewell Party' => 'Farewell Party', 'Wedding' => 'Wedding'],
        ]);
        $this->crud->addField([
            'name'  => 'min-capacity',
            'label' => 'Min Capacity',
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name'  => 'mx-capacity',
            'label' => 'Max Capacity',
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name'  => 'landmark',
            'label' => 'Landmark/Near',
            'type'  => 'textarea',
        ]);
         
        $this->crud->addField([
            'name'  => 'contact_name',
            'label' => 'Contact Person Name',
            'type'  => 'text',
        ]);
        
        $this->crud->addField([
            'name'  => 'contact_email',
            'label' => 'Contact Email',
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name'  => 'contact_number',
            'label' => 'Contact Number',
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name'  => 'price',
            'label' => 'Price',
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name'  => 'map',
            'label' => 'Map',
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name'  => 'approach',
            'label' => 'approach',
            'type'  => 'textarea',
        ]);

        $this->crud->addField([
            'name'  => 'entrance_and_outside',
            'label' => 'Entrance & Outside',
            'type'  => 'textarea',
        ]);        

        $this->crud->addField([
            'name'  => 'ambiance',
            'label' => 'Ambiance',
            'type'  => 'textarea',
        ]);

        $this->crud->addField([
            'name'  => 'food_and_services_provided',
            'label' => 'Food & Services Provided',
            'type'  => 'textarea',
        ]);

        $this->crud->addField([
            'name'  => 'anything_special_about_the_place',
            'label' => 'Other Information',
            'type'  => 'textarea',
        ]);        
        /*$this->crud->addField([
			'name' => 'desc',
			'label' => trans('backpack::pagemanager.content'),
			'type' => 'wysiwyg',
			'placeholder' => trans('backpack::pagemanager.content_placeholder'),
		]);*/
		
		/*$this->crud->addField([
            'name'  => 'read_more',
            'label' => 'Read More',
            'type'  => 'text',
        ]);*/
		
		/*$this->crud->addField([ // image
			'label' => "Image",
			'name' => "image",
			'type' => 'image',
			'upload' => true,
			'crop' => false, // set to true to allow cropping, false to disable
			'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
			'prefix' => 'slider/' // in case you only store the filename in the database, this text will be prepended to the database value
		]);*/

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
    public function partyplot()
    {
      	echo 'in partyplot'; die;
    $partyplotData = Partyplot::where('status', 1)->get();
   	$view = array(
                  'partyplot'=>$partyplotData
                );
    return view('pages.home', $view);
    }   

   
}
