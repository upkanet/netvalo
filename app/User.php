<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'street', 'zipcode', 'city',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function companies(){
        return $this->hasMany('App\Company');
    }

    public function requests(){
        return $this->hasMany('App\Request');
    }

    public function populateDemo(){
        $demoUser = User::find(1);

        foreach ($demoUser->companies as $demoCompany) {
            $newCompany = $demoCompany->replicate();
            $newCompany->user_id = $this->id;
            $newCompany->save();

            foreach ($demoCompany->bilans as $demoBilan) {
                $newBilan = $demoBilan->replicate();
                $newBilan->company_id = $newCompany->id;
                $newBilan->save();
            }

            foreach ($demoCompany->crs as $demoCR) {
                $newCR = $demoCR->replicate();
                $newCR->company_id = $newCompany->id;
                $newCR->save();
            }

        }
    }

}
