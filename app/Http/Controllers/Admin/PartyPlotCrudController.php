<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ContactRequest as StoreRequest;
use App\Http\Requests\ContactRequest as UpdateRequest;
use App\Models\UserCompanies;
use App\Models\PartyPlot;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PartyPlotCrudController extends CrudController {

    public function setUp() {

        /*
          |--------------------------------------------------------------------------
          | BASIC CRUD INFORMATION
          |--------------------------------------------------------------------------
         */
        $this->crud->setModel("App\Models\PartyPlot");
        $this->crud->setRoute("admin/party_plot");
        $this->crud->setEntityNameStrings('Party Plot', 'Party Plot');

        /*
          |--------------------------------------------------------------------------
          | BASIC CRUD INFORMATION
          |--------------------------------------------------------------------------
         */

//        $this->crud->setFromDb();
        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            // run a function on the CRUD model and show its return value
            'label' => "Name", // Table column heading
            'type' => "model_function",
            'function_name' => 'getFullName', // the method in your Model
        ]);
        $this->crud->addColumn([
            'label' => 'Position',
            'name' => 'position',
        ]);

        $this->crud->addColumn([
            'label' => 'Date Created',
            'name' => 'created_at',
            'type' => 'datetime',
        ]);

        $this->crud->addField([
            'label' => 'Select Company',
            'type' => 'select',
            'name' => 'company_id',
            'entity' => 'company',
            'attribute' => 'title',
            'model' => "App\Models\Company",
        ]);

        $this->crud->addField([
            'name' => 'first_name',
            'label' => 'First name',
        ]);
        $this->crud->addField([
            'name' => 'last_name',
            'label' => 'Last name',
        ]);
        $this->crud->addField([
            'name' => 'position',
            'label' => 'Position',
        ]);

        $this->crud->addField([
            'name' => 'email',
            'label' => 'Email',
            'type' => 'email'
        ]);

        $this->crud->addField([
            'name' => 'phone_no',
            'label' => 'Phone No.',
            'type' => 'number',
        ]);
        $this->crud->addField([
            'name' => 'mobile_no',
            'label' => 'Mobile No.',
            'type' => 'number',
        ]);

        $this->crud->addField([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'select_from_array',
            'options' => ['Active' => 'Active', 'High Priority' => 'High Priority', 'Idle' => 'Idle','Do Not See' => 'Do Not See'],
            'allows_null' => false
        ]);

        $this->crud->addField([// Textarea
            'name' => 'notes',
            'label' => 'Notes',
            'type' => 'textarea'
        ]);

        $this->crud->removeButtonFromStack('create', 'top');

        $this->crud->addButtonFromView('line', 'createappointment', 'createappointment', 'end');
		
    }

    public function store(StoreRequest $request) {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request) {
        return parent::updateCrud();
    }

    public function index($companyId = '') {
        if ($companyId) {
            $this->crud->addClause('where', 'company_id', '=', $companyId);
        }
        return parent::index();
    }

    public function create($companyId = '') {
        
        $this->crud->addField([// Select2Multiple = n-n relationship (with pivot table)
            'label' => "City",
            'type' => 'select2_ajax',
            'name' => 'city_id', // the method that defines the relationship in your Model
            'entity' => 'city', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model' => "App\Models\Cities", // foreign key model
            'datasource' => url("admin/cities/getall"), // url to controller search function (with /{id} should return model)
            'initialdatasource' => url("admin/cities/getone"), // url to controller search function (with /{id} should return model)
            'placeholder' => "Select a city", // placeholder for the select
            'minimumInputLength' => 2, // minimum characters to type before querying results
        ]);
        $this->crud->addField([// Hidden
            'name' => 'company_id',
            'type' => 'hidden',
            'value' => $companyId,
        ]);
        return parent::create();
    }

    public function edit($id) {        
        $this->crud->addField([// Select2Multiple = n-n relationship (with pivot table)
            'label' => "City",
            'type' => 'select2_ajax',
            'name' => 'city_id', // the method that defines the relationship in your Model
            'entity' => 'city', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'model' => "App\Models\Cities", // foreign key model
            'datasource' => url("admin/cities/getall"), // url to controller search function (with /{id} should return model)
            'initialdatasource' => url("admin/cities/getone"), // url to controller search function (with /{id} should return model)
            'placeholder' => "Select a city", // placeholder for the select
            'minimumInputLength' => 2, // minimum characters to type before querying results
        ]);

        $this->crud->addField([// Hidden
            'name' => 'company_id',
            'type' => 'hidden'
        ]);
        return parent::edit($id);
    }

    public function sendAppointment($contactId = '', Request $request) {
        $contact = Contacts::find($contactId);
        if ($contact AND $request->isMethod('post')) {
            
            $salesPerson = $contact->company()->get()[0]->user()->get()[0];
            $company = $contact->company()->get()[0];
            $startTime = Input::get('start_time');
            $endTime = Input::get('end_time');
            $description = Input::get('description');
            $this->sendIcalEvent($salesPerson->name, $salesPerson->email, $contact->first_name . ' ' . $contact->last_name, $contact->email, $startTime, $endTime, 'Meeting with ' . $salesPerson->name, $description, $company->address);
            $request->session()->flash('alert-success', 'Email sent successfully');
            return redirect()->action(
                            'Admin\ContactCrudController@index', ['contactId' => $contact->company_id]
            );
        }
        $this->data['contact'] = $contact;
        return view('contact.createappointment', $this->data);
    }

    private function sendIcalEvent($from_name, $from_address, $to_name, $to_address, $startTime, $endTime, $subject, $description, $location) {
        $domain = 'exchangecore.com';

        //Create Email Headers
        $mime_boundary = "----Meeting Booking----" . MD5(TIME());

        $headers = "From: " . $from_name . " <" . $from_address . ">\n";
        $headers .= "Reply-To: " . $from_name . " <" . $from_address . ">\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\n";
        $headers .= "Content-class: urn:content-classes:calendarmessage\n";

        //Create Email Body (HTML)
        $message = "--$mime_boundary\r\n";
        $message .= "Content-Type: text/html; charset=UTF-8\n";
        $message .= "Content-Transfer-Encoding: 8bit\n\n";
        $message .= "<html>\n";
        $message .= "<body>\n";
        $message .= '<p>Dear ' . $to_name . ',</p>';
        $message .= '<p>' . $description . '</p>';
        $message .= "</body>\n";
        $message .= "</html>\n";
        $message .= "--$mime_boundary\r\n";

        $ical = 'BEGIN:VCALENDAR' . "\r\n" .
                'PRODID:-//Microsoft Corporation//Outlook 10.0 MIMEDIR//EN' . "\r\n" .
                'VERSION:2.0' . "\r\n" .
                'METHOD:REQUEST' . "\r\n" .
                'BEGIN:VTIMEZONE' . "\r\n" .
                'TZID:Eastern Time' . "\r\n" .
                'BEGIN:STANDARD' . "\r\n" .
                'DTSTART:20091101T020000' . "\r\n" .
                'RRULE:FREQ=YEARLY;INTERVAL=1;BYDAY=1SU;BYMONTH=11' . "\r\n" .
                'TZOFFSETFROM:-0400' . "\r\n" .
                'TZOFFSETTO:-0500' . "\r\n" .
                'TZNAME:EST' . "\r\n" .
                'END:STANDARD' . "\r\n" .
                'BEGIN:DAYLIGHT' . "\r\n" .
                'DTSTART:20090301T020000' . "\r\n" .
                'RRULE:FREQ=YEARLY;INTERVAL=1;BYDAY=2SU;BYMONTH=3' . "\r\n" .
                'TZOFFSETFROM:-0500' . "\r\n" .
                'TZOFFSETTO:-0400' . "\r\n" .
                'TZNAME:EDST' . "\r\n" .
                'END:DAYLIGHT' . "\r\n" .
                'END:VTIMEZONE' . "\r\n" .
                'BEGIN:VEVENT' . "\r\n" .
                'ORGANIZER;CN="' . $from_name . '":MAILTO:' . $from_address . "\r\n" .
                'ATTENDEE;CN="' . $to_name . '";ROLE=REQ-PARTICIPANT;RSVP=TRUE:MAILTO:' . $to_address . "\r\n" .
                'LAST-MODIFIED:' . date("Ymd\TGis") . "\r\n" .
                'UID:' . date("Ymd\TGis", strtotime($startTime)) . rand() . "@" . $domain . "\r\n" .
                'DTSTAMP:' . date("Ymd\TGis") . "\r\n" .
                'DTSTART;TZID="Eastern Time":' . date("Ymd\THis", strtotime($startTime)) . "\r\n" .
                'DTEND;TZID="Eastern Time":' . date("Ymd\THis", strtotime($endTime)) . "\r\n" .
                'TRANSP:OPAQUE' . "\r\n" .
                'SEQUENCE:1' . "\r\n" .
                'SUMMARY:' . $subject . "\r\n" .
                'LOCATION:' . $location . "\r\n" .
                'CLASS:PUBLIC' . "\r\n" .
                'PRIORITY:5' . "\r\n" .
                'BEGIN:VALARM' . "\r\n" .
                'TRIGGER:-PT15M' . "\r\n" .
                'ACTION:DISPLAY' . "\r\n" .
                'DESCRIPTION:Reminder' . "\r\n" .
                'END:VALARM' . "\r\n" .
                'END:VEVENT' . "\r\n" .
                'END:VCALENDAR' . "\r\n";
        $message .= 'Content-Type: text/calendar;name="meeting.ics";method=REQUEST' . "\n";
        $message .= "Content-Transfer-Encoding: 8bit\n\n";
        $message .= $ical;        

        $mailsent = mail($to_address, $subject, $message, $headers);

        return ($mailsent) ? (true) : (false);
    }

}
