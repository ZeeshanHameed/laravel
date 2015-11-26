<?php

namespace App\models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class parent1 extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'parent1';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['parent_name'];

    public function son(){
        return $this->hasMany('App\models\son');
    }

}
