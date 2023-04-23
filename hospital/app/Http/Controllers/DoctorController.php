<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Visits;

use App\Models\Appointment;

class DoctorController extends Controller
{
    public function adduserdata()
    {
        return view('doctor.add_user_visits');
    }

    public function uploadUserData(Request $request){
        $visits = new visits;

        $visits -> fullName = $request -> fullName;

        $visits -> gender = $request -> gender;

        $visits -> birthday = $request -> birthday;

        $visits -> email = $request -> email;

        $visits -> visited = $request -> visited;

        $visits -> dateVisited = $request -> dateVisited;

        $visits -> medicine = $request -> medicine;

        $visits -> save();

        if(Auth::id()){
            $visits -> email = Auth::user() -> id;
        }

        return redirect() -> back() -> with ('message', 'User Visits Added Successfully');
    }

    public function showVisits(){
        $visits = visits::all();
 
        return view('doctor.show-user-visits',compact('visits'));
    }

    public function deleteUserVisits($id){
        $visits = visits::find($id);

        $visits -> delete();

        return redirect()->back();
    }

    public function updateUserVisits($id){

       $visits = visits::find($id);

       return view('doctor.update-visits',compact('visits'));
    }

    public function appoints(){

        $data = appointment::all();

        return view('doctor.appoints', compact('data'));
    }

    public function approved($id){
        $data = appointment::find($id);

        $data -> status = 'Approved';

        $data -> save();

        return redirect() -> back();

    }

    public function canceled($id){
        $data = appointment::find($id);

        $data -> status = 'Canceled';

        $data -> save();

        return redirect() -> back();

    }

    public function showUserVisit(){
        if(Auth::id()){

            $userid=Auth::user()->email;

            $visits = visits :: where('email',$userid)->get();

            return view('user.docVisits' , compact('visits'));
        }

        else {
            return redirect()-> back();
        }
    }
}
