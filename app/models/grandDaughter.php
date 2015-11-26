<?php

namespace App\models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class grandDaughter extends Model
{
    protected $table = 'grand_daughter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['grand_daughter_name'];

    public function son(){
        return $this->belongsTo("App\models\son");
    }    
}
