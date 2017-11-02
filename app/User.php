<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'firstname', 'phonenumber','gender','address','addresscomp','postcode','city', 'role', 'confirmation_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $is_member = null;

    public function hasRole($role) {
        return $this->role === $role ;
    }

    public function hasAddress() {
        return !is_null($this->city);
    }

    public function cotisations() {
        return $this->hasMany('App\Cotisation');
    }

    public function ismember() {
        return ($this->member == 1) ;
    }
    
    public function hasCotisation()
    {
        $cotisations = $this->cotisations;
        $currentcotisation = $cotisations->where('season', 2017);

        return ($currentcotisation->count() > 0) ? true : false ;
    }

    public function hasvalidemail() {
        return ($this->confirmation_token == null);
    }

    public function activatemember() {
        if($this->hasCotisation() && $this->hasvalidemail() && $this->hasAddress() ) {
            $this->member = 1;
            $this->save();
        }

        return $this->ismember();
    }
}
