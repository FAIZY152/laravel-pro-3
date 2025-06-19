<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
class UserController extends Controller
{
    // function users(){

    //      return DB::select('select * from users');
    // }

    // using equilent orm
    // function getStudents(){
    //     $students = \App\Models\Student::all();
    //     return $students;
    // }

    // api 

    // function getUser(){
    //     $response = Http::get('https://jsonplaceholder.typicode.com/users');
    //     $response = $response->json();
    //     // pass to the view 
    //     return view('user' , ['users' => $response]);
    //     // return $response->status();
    // }

    // Query builder = easy way to create and mange dbs
    
// ...existing code...
// function getUsers ()  {
//     $response = DB::table('students')->get(); // fetch the data
//     return response()->json($response); // return as JSON
// }

function addUser(){
    $user = DB::table('students')->insert([
        "name"=>"lala",
        "email"=>"lala@gmail.com",
        "age"=>20
    ]);
    return $user;
}
// ...existing code...

}
