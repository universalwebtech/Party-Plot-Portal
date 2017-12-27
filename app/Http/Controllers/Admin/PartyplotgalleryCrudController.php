<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PartyPlotGallery as UpdateRequest;
use App\Http\Requests\PartyPlotGallery as StoreRequest;

use App\Models\PartyPlotGallery;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request AS INPUT_REQUEST;



class PartyplotgalleryCrudController extends CrudController
{
	public $partyPlotId = '';
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
		$partyPlotId = \Route::current()->parameter('partyPlotId');
        $this->crud->setModel('App\Models\PartyPlotGallery');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/gallery');
        $this->crud->setEntityNameStrings('Party Plot Gallery', 'Party Plot Gallery');
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
		$this->crud->addColumn([
            // run a function on the CRUD model and show its return value
            'label' => "Name", // Table column heading
            'type' => "model_function",
            'function_name' => 'getImage', // the method in your Model
        ]);
         // add a text column, at the end of the stack
        //$this->crud->addColumn('status'); // add a single column, at the end of the stack
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
        
		
		$this->crud->addField([ // image
			'label' => "Image",
			'name' => "image",
			'type' => 'image',
			'upload' => true,
			'crop' => false, // set to true to allow cropping, false to disable
			'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
			'prefix' => 'party_plot_gallery/' // in case you only store the filename in the database, this text will be prepended to the database value
		]);

         $this->crud->addField([
            'name'  => 'status',
            'label' => 'Status',
            'type'  => 'select_from_array',
             'options' => ['1' => 'Active', '0' => 'Deactive'],
        ]); 
        // ------ FILTERS
        //$this->addCustomCrudFilters();
		$this->crud->removeButtonFromStack('create', 'top');
		$this->crud->removeButton('cancel');
		$this->crud->addButtonFromView('top', 'createpartyplotgallery', 'createpartyplotgallery');
        $this->crud->addClause('where', 'party_plot_id', '=', $partyPlotId);
		

    }

    public function store(StoreRequest $request) {
		$partyPlotId = $request->session()->pull('partyPlotId', '');
		
        $response = parent::storeCrud();
		return \Redirect::to('admin/gallery/index/'.$partyPlotId);
    }

    public function update(UpdateRequest $request) {
		$partyPlotId = $request->session()->pull('partyPlotId', '');
		
		parent::updateCrud();
		
		return \Redirect::to('admin/gallery/index/'.$partyPlotId);
    }

    public function index($partyPlotId = '') {
		global $request;
		$request->session()->put('partyPlotId', $partyPlotId);
		return parent::index();
    }
	
	public function create($partyPlotId = '') {
		global $request;
		$request->session()->put('partyPlotId', $partyPlotId);
        $this->crud->addField([// Hidden
            'name' => 'party_plot_id',
            'type' => 'hidden',
            'value' => $partyPlotId,
        ]);
        return parent::create($partyPlotId);
    }
	
	public function edit($id) {  
		global $request;
		$partyplot = PartyPlotGallery::where('id', $id)->first();
		$request->session()->put('partyPlotId', $partyplot->party_plot_id);
		
        $this->crud->addField([// Hidden
            'name' => 'party_plot_id',
            'type' => 'hidden'
        ]);
	
        return parent::edit($id);
    }
	
     public function search() {
        global $request;
        $partyPlotId=$request->session()->pull('partyPlotId');
        // Sets the parameters from the get request to the variables.
        // Perform the query using Query Builder
        $result = PartyPlotGallery::where('party_plot_id', $partyPlotId)->get();
        $filteredRows= $totalRows=count($result);
        return $this->crud->getEntriesAsJsonForDatatables($result, $totalRows, $filteredRows);
        //return $result;
    }
	public function destroy($id)
	{
		$image = PartyPlotGallery::where('id', $id)->first();
		$file= $image->image;
		$filename = public_path().'/party_plot_gallery/'.$file;
		\File::delete($filename);
		return parent::destroy($id);
	 }
}
