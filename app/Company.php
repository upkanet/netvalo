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

    public function hasYear($year){
        return ($this->bilan($year) !== null) || ($this->cr($year) !== null);
    }

    public function hasB2CR3($year){
        return ($this->bilan($year) !== null) && ($this->bilan($year-1) !== null) && ($this->cr($year) !== null) && ($this->cr($year-1) !== null)  && ($this->cr($year-2) !== null);
    }

    public function availableDocsArray(){
        $avDocs = null;
        //get first year
        $miny = min($this->bilans->min('year') ?: PHP_INT_MAX, $this->crs->min('year') ?: PHP_INT_MAX);
        //get last year
        $maxy = max($this->bilans->max('year') ?: PHP_INT_MIN, $this->crs->max('year') ?: PHP_INT_MIN);

        if($miny){
            for($i=$miny; $i <= $maxy; $i++){
                $this->bilan($i) != null ? $avDocs[$i]['bilan'] = true : $avDocs[$i]['bilan'] = false;
                $this->cr($i) != null ? $avDocs[$i]['cr'] = true : $avDocs[$i]['cr'] = false;
                $this->hasB2CR3($i) != null ? $avDocs[$i]['analysis'] = true : $avDocs[$i]['analysis'] = false;
            }
            krsort($avDocs);
        }

        return $avDocs;
    }
}
