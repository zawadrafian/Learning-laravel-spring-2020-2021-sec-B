<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(){

        return view('Sales.sales');
    }
    public function physicalstore(){

        
        

        return view('Sales.physicalstore');
    }
    public function socialmedia(){

        return view('Sales.socialmedia');
    }
    public function ecommerce(){

        return view('Sales.ecommerce');
    }
}
