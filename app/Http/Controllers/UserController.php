<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "หน้า User";
    }

    public function create(){
        return "สร้าง User";
    }

    public function showname($name){
        return  "Name $name";
    }

    public function shownameAndAge($name, $age){
        return "Name $name, Age $age";
    }
}
