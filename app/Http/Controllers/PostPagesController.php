<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactmessage;
use App\Models\appointment;

class PostPagesController extends Controller
{
    function StoreContact(){
        request()->all();

        request()->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string'
        ]);

        $name = request()->name;
        $email = request()->email; 
        $subject = request()->subject; 
        $phone = request()->phone; 
        $message = request()->message;

        contactmessage::create([
            'name' => $name ,
            'email' => $email ,
            'subject' => $subject ,
            'phone' => $phone ,
            'message' => $message ,
        ]);

        return to_route('confirmation.index');
    }

    function StoreAppointment(Request $request){

        $request->all();

        $validateData = $request->validate([
            'department' => 'required',
            'doctor' => 'required' ,
            'date' => 'required',
            'time' => 'required',
            'name' => 'required',
            'phone' => 'required|numeric',
            'message' => 'required',
        ]);
        
        $appointment = new Appointment();

        $appointment->doctor = $validateData['doctor'];
        // $appointment->doctor = $validateData['doctor'];
        // $appointment->doctor = $validateData['doctor'];
        // $appointment->doctor = $validateData['doctor'];
        // $appointment->doctor = $validateData['doctor'];
        // $appointment->doctor = $validateData['doctor'];
       var_dump($appointment->doctor);
        // $department = request()->department;
        // $doctor = request()->doctor;
        // $date = request()->date;
        // $time = request()->time;
        // $name = request()->name;
        // $phone = request()->phone;
        // $message = request()->message;

        appointment::create([
            'department' => $department , 
            'doctor' => $doctor ,
            'date' => $date ,
            'time' => $time ,
            'name' => $name ,
            'phone' => $phone ,
            'message' => $message ,
        ]);

        return to_route('confirmationAPP.index');
    }

    
}
