<?php

namespace App\Http\Controllers;

use App\Holiday;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){

        $holidays = Holiday::paginate(10);
        //dump($holidays);

        $data = [
            'holidays' => $holidays
        ];
        
        return view('home', $data);
    }
}
