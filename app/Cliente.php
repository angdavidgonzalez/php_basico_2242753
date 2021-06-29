<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    protected $table = "customer";
    protected $primaryKey = "CustomerId";
    public $timestamps = false;

    //RELACION 1:M CON COMPRA
    public function Compra(){
        return $this->hasMany('App\Compra','CustomerId');
    }
}
