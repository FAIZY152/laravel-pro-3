<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class EqQueryBuilder extends Controller
{
function Queries(){
        $user = Student::all();
        return $user;
        // return view('eqquery');
    }
}
