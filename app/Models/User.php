<?php

namespace App\Models;

use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;
use Backpack\CRUD\CrudTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use CrudTrait;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'mobile','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param string $token
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
	
	public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }
	public function user()
    {
        return $this->belongsTo('App\Models\Role', 'user_id');
    }
	/*
	public function user()
    {
        //return $this->belongsTo('App\User', 'user_id');
        return $this->belongsTo('App\User1')->using('App\Models\Role')->wherePivot('role_id', 1);
		return $this->belongsToMany('App\User')->using('App\UserRole');
		return $this->belongsTo('App\User')->withDefault([
        'name' => 'Guest Author',
		]);
    }*/
	
}

