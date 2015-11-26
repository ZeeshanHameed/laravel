<?php

namespace App\models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class grandSon extends Model
{
    protected $table = 'grand_son';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['grand_son_name'];

    public function son(){
        return $this->belongsTo("App\models\son");
    }    
}
