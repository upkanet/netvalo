<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //User relationship
    public function user(){
    	return $this->belongsTo('App\User');
    }

    //Bilans relationship
    public function bilans()
    {
    	return $this->hasMany('App\Bilan');
    }

    public function bilan($year){
        return $this->bilans()->where('year', $year)->first();
    }

    //CR relationship
    public function crs()
    {
        return $this->hasMany('App\CR');
    }

    public function cr($year){
        return $this->crs()->where('year', $year)->first();
    }

    //Years detection
    public function latestBilanYear(){
        return $this->bilans->max('year');
    }

    public function latestCRYear(){
        return $this->crs->max('year');
    }

    public function latestYear(){
        return max($this->latestBilanYear(), $this->latestCRYear());
    }

    public function hasB2CR3($year){
        return ($this->bilan($year) !== null) && ($this->bilan($year-1) !== null) && ($this->cr($year) !== null) && ($this->cr($year-1) !== null)  && ($this->cr($year-2) !== null);
    }

    public function availableYears(){
        $y = $this->latestYear();
        $availableYears =[];

        while ($this->hasB2CR3($y)) {
            $availableYears[] = $y;
            $y--;
        }

        return $availableYears;

    }
}
