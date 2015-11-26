<?php

namespace App\Http\Controllers;

use App\models\son;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class parentSonController extends Controller
{
    public function __construct()
    {
        // $this->son =  new son;
        // $this->parent1Object =  new parent1;
        // $this->grandSon =  new grandSon;
    }


    public function findSon(){
        echo son::with(['parent1', 'mother', 'grandDaughter', 'grandSon'])->get();
        // echo $this->son->find(1)->grandSon()->get();
        // echo $this->parent1ABC->find(1)->son()->grandSon()->]get();
        // echo $this->parent1Object->find(1)->son()->get();
        // echo parent1::with(['son', 'grandSon'])->get();
        // echo parent1::with(['grandSon'])->get();
    	// echo son::find(1)->parent1;
    }

}
