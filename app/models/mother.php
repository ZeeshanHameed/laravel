<?php

namespace App\models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class mother extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mother';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['mother_name'];

    public function son(){
        return $this->hasMany('App\models\son');
    }

}
