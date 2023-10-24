<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($value1,$value2,$action)
    {
        return view('message.calcs',['value1' => $value1, 'action' => $action, 'value2' => $value2]);
    }
}
