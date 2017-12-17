<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
//use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partyplot extends Model
{
    use CrudTrait;
    use SoftDeletes;
//    use Sluggable;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'party_plot';
    protected $primaryKey = 'id';
     public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'address','ideal_for','min-capacity','mx-capacity','landmark', 'contact_name', 'contact_email', 'contact_number', 'price','map','approach','entrance_and_outside','ambiance','food_and_services_provided','anything_special_about_the_place','status'];
    protected $dates = ['deleted_at'];
    // protected $hidden = [];
    // protected $dates = [];
    

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
/*
    public function company()
    {
        return $this->belongsTo('App\Models\UserCompanies', 'company_id');
    }
*/
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
//
//    public function scopeFirstLevelItems($query)
//    {
//        return $query->where('depth', '1')
//                    ->orWhere('depth', null)
//                    ->orderBy('lft', 'ASC');
//    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    // The slug is created automatically from the "name" field if no slug exists.
//    public function getSlugOrNameAttribute()
//    {
//        if ($this->slug != '') {
//            return $this->slug;
//        }
//
//        return $this->name;
//    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    
   /*public function getFullName(){
       return $this->first_name.' '.$this->last_name;
   }
   
   public function getLocation(){
       $tempArr = Array();
       if($this->city != ''){
           array_push($tempArr, $this->city);
       }
       if($this->country != ''){
           array_push($tempArr, $this->country);
       }
       
       return implode(',', $tempArr);
   }*/
}