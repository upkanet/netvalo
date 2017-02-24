<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
        $company = [
            'user_id' => $this->id,
            'name' => 'Demo',
            'siret' => '12345678901234',
        ];
        $company = Company::create($company);

        //Bilans
        for($i=1;$i<=2;$i++){
            $bilan = Bilan::find($i);
            $bilan = $bilan->replicate();
            $bilan->company_id = $company->id;
            $bilan->save();
        }

        //CRs
        for($i=1;$i<=3;$i++){
            $cr = CR::find($i);
            $cr = $cr->replicate();
            $cr->company_id = $company->id;
            $cr->save();
        }

    }

}
