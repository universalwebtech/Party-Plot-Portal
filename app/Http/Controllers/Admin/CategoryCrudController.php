<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CategoryRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Models\Category;

class CategoryCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Category');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/category');
        $this->crud->setEntityNameStrings('Category', 'Category');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn('title'); // add a text column, at the end of the stack
        $this->crud->addColumn('description'); // add a single column, at the end of the stack
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
            'label' => 'Title',
            'type'  => 'text',
        ]);

       $this->crud->addField([
			'name' => 'description',
			'label' => trans('backpack::pagemanager.content'),
			'type' => 'wysiwyg',
			'placeholder' => trans('backpack::pagemanager.content_placeholder'),
		]);
		
		$this->crud->addField([ // image
			'label' => "Image",
			'name' => "image",
			'type' => 'image',
			'upload' => true,
			'crop' => false, // set to true to allow cropping, false to disable
			'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
			'prefix' => 'slider/' // in case you only store the filename in the database, this text will be prepended to the database value
		]);
         $this->crud->addField([
            'name'  => 'status',
            'label' => 'Status',
            'type'  => 'select_from_array',
             'options' => ['1' => 'Active', '0' => 'Deactive'],
        ]);

         $this->crud->addField([
            'name'  => 'display_on_home',
            'label' => 'Display on Home Page',
            'type'  => 'select_from_array',
             'options' => ['1' => 'Yes', '0' => 'No'],
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
    public function category()
    {
      
    $categoryData = Category::where('status', 1)->where('display_on_home',1)->get();
   
    $view = array(
                  'name'=>$categoryData
                );
    return view('pages.home', $view);
    }   

   
}
