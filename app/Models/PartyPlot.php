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
    protected $fillable = ['name', 'category_id', 'address','description','image','ideal_for','min-capacity','mx-capacity','landmark', 'contact_name', 'contact_email', 'contact_number', 'price','map','approach','entrance_and_outside','ambiance','food_and_services_provided','anything_special_about_the_place','status'];
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
   public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "party_plot";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $filename;
        }
    }
	
	public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
	
	public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}