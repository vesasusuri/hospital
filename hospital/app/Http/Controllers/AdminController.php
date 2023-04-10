<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointment;

use App\Models\News;


class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }
    
    public function upload(Request $request){
        $doctor = new doctor;

        $image = $request -> file;

        $imagename = time().'.'.$image -> getClientoriginalExtension();

        $request -> file -> move('doctorimage' , $imagename);

        $doctor -> image = $imagename;

        $doctor -> name = $request -> name;

        $doctor -> phone = $request -> number;

        $doctor -> room = $request -> room;

        $doctor -> speciality = $request -> speciality;

        $doctor -> save();

        return redirect() -> back() -> with ('message', 'Doctor Added Successfully');
    }

    public function showappointment(){

        $data = appointment::all();

        return view('admin.showappointment', compact('data'));
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

    public function showdoctor(){
       $data = doctor::all();

       return view('admin.showdoctor',compact('data'));
    }

    public function deletedoctor($id){
        $data = doctor::find($id);

        $data -> delete();

        return redirect()->back();
    }

    public function updatedoctor($id){

       $data = doctor::find($id);

       return view('admin.updatedoctor',compact('data'));
    }

    public function editdoctor(Request $request, $id){

        $doctor = doctor::find($id);

        $doctor -> name = $request -> name;

        $doctor -> phone = $request -> phone;

        $doctor -> speciality = $request -> speciality;

        $doctor -> room = $request -> room;

        $image = $request -> file;

        if($image){

            $imagename = time().'.'. $image -> getClientOriginalExtension();

            $request ->file->move('doctorimage', $imagename);

            $doctor -> image = $imagename;
        }
        $doctor -> save();

        return redirect()->back()->with('message', 'Doctor Details Updates Successfully');
    }
    
    public function addnews()
    {
        return view('admin.add_news');
    }

    public function uploadnews(Request $request){
        $news = new news;

        $image = $request -> file;

        $imagename = time().'.'.$image -> getClientoriginalExtension();

        $request -> file -> move('newsimage' , $imagename);

        $news -> image = $imagename;

        $news -> description = $request -> description;

        $news -> links = $request -> links;

        $news -> save();

        return redirect() -> back() -> with ('message', 'News Added Successfully');
    }

    public function shownews(){
        $news = news::all();
 
        return view('admin.show-news',compact('news'));
    }

    public function deletenews($id){
        $news = news::find($id);

        $news -> delete();

        return redirect()->back();
    }

    public function updatenews($id){

       $news = news::find($id);

       return view('admin.update-news',compact('news'));
    }

    public function editnews(Request $request, $id){

        $news = news::find($id);

        $news -> description = $request -> description;

        $news -> links = $request -> links;

        $image = $request -> file;

        if($image){

            $imagename = time().'.'. $image -> getClientOriginalExtension();

            $request ->file->move('newsimage', $imagename);

            $news -> image = $imagename;
        }
        $news -> save();

        return redirect()->back()->with('message', 'News Details Updates Successfully');
    }
    
}