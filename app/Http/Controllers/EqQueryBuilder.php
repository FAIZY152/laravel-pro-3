<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class EqQueryBuilder extends Controller
{
function Queries(){
        // $user = Student::all();
        $user = Student::get();
        // return $user;
        return view('eqquery' , ['users' => $user]);
    }

    function AddnewUser(){
        $user = Student::insert([
            "name"=>"kaka",
            "email"=>"kaka@gmail.com",
            "age"=>38
        ]);;
        if ($user) {
            return "User Added Successfully";
        }else {
            return "Something went wrong";
        }
    }
    function updateandDelete(){
        $user = Student::where('name', "lala")->update(['name' => 'Lala jan']);
        if ($user) {
            return "User Update Successfully";
        }else {
            return "Something went wrong";
        }
    }
}
