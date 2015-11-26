<?php

namespace App\models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class son extends Model 
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'son';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function grandSon(){
        return $this->hasMany('App\models\grandSon');
    }

    public function grandDaughter(){
        return $this->hasMany('App\models\grandDaughter');
    }    

    public function parent1(){
        return $this->belongsTo("App\models\parent1");
    }

    public function mother(){
        return $this->belongsTo("App\models\mother");
    }    
}
