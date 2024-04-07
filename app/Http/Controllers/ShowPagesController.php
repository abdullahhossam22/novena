<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;

class ShowPagesController extends Controller
{
    function ShowHome(){
        return view('index');
    }

    function ShowAbout(){
        return view('about');
    }

    function ShowService(){
        return view('service');
    }

    function ShowAppoinment(){
        return view('appoinment');
    }

    function ShowContact(){
        return view('contact');
    }

    function ShowConfirmation(){
        return view('confirmation');
    }

    function ShowConfirmationAPP(){
        return view('confirmationAPP');
    }

    function ShowDepartments(){
        $departments = department::all();
        return view('department',['departments'=>$departments]);
    }

    function ShowSingleDepartment($department){
        $S_Department = department::find($department);
        return view('department-single',['S_Department'=> $S_Department]);
    }

}
