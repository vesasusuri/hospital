<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visits;

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

    public function editUserVisits(Request $request, $id){

        $visits = visits::find($id);

        $visits -> fullName = $request -> fullName;

        $visits -> gender = $request -> gender;

        $visits -> birthday = $request -> birthday;

        $visits -> email = $request -> email;

        $visits -> visited = $request -> visited;

        $visits -> dateVisited = $request -> dateVisited;

        $visits -> medicine = $request -> medicine;

        $visits -> save();

        return redirect()->back()->with('message', 'News Details Updates Successfully');
    }
}
