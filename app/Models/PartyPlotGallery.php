<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class PartyPlotGallery extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'party_plot_gallery';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['party_plot_id', 'image', 'status'];
    // protected $hidden = [];
    // protected $dates = [];
	
	public function party_plot()
    {
        return $this->belongsTo('App\Models\PartyPlot', 'party_plot_id');
    }
	
	public function getImage(){
      return "<img width='50' height='50' src='../../../party_plot_gallery/".$this->image."' />";
   }
	
	public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "party_plot_gallery";

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
}
