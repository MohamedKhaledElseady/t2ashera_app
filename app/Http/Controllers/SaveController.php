<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaveController extends Controller
{
    public function save(Request $request)
    {
        dd("cat" , $request->all());
    }
}
