<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SliderRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SliderRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class SliderCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Slider');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/slider');
        $this->crud->setEntityNameStrings('Slide', 'Slide');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn('title'); // add a text column, at the end of the stack
        $this->crud->addColumn('read_more'); // add a single column, at the end of the stack
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
            'name'  => 'title',
            'label' => 'Tite',
            'type'  => 'text',
        ]);

       $this->crud->addField([
			'name' => 'desc',
			'label' => trans('backpack::pagemanager.content'),
			'type' => 'wysiwyg',
			'placeholder' => trans('backpack::pagemanager.content_placeholder'),
		]);
		
		$this->crud->addField([
            'name'  => 'read_more',
            'label' => 'Read More',
            'type'  => 'text',
        ]);
		
		$this->crud->addField([   // Browse
            'name'  => 'image',
            'label' => 'Image',
            'type'  => 'upload',
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

   
}
