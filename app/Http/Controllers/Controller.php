<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController{

    public function index(){
        $randomNumber = (rand(1,22));
        $data=[];
        $data["src"]="https://randomquotes.s3.amazonaws.com/quote".$randomNumber.".jpg";
        $data["host"]= gethostbyname(gethostname());
        return view('index')->with('data',$data);
    }

}
