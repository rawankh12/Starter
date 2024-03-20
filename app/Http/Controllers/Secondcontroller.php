<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Secondcontroller extends Controller
{
    public function getIndex(){
        // $obj = new \stdClass();

        // $obj -> name = 'ahmad';
        // $obj -> id = '5';
        // $obj -> gender = 'male';

        $data=['ahmad' , 'omar'];
        return view('welcome') -> with ('data',$data);
    }
}
