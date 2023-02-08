<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadualController extends Controller
{
    //

    public function index($subjek){
        echo "<h1> ini jadual kelas -  $subjek </h1>";
    }
}
