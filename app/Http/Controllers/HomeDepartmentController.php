<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeDepartmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('HomeDepartment');
    }

    public function HomeDepartment(){
        return view('HomeDepartment.index');
    }
}
