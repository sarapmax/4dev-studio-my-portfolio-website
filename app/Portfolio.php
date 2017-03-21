<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function portfolio_image() {
    	return $this->hasMany('App\PortfolioImage');
    }

    public function portfolio_type(){
    	return $this->belongsTo('App\PortfolioType', 'portfolio_type_id');
    }
}
